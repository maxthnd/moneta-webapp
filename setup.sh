#Define Text-Colors
Color_Off='\033[0m'
Cyan='\033[0;36m'
Green='\033[0;32m'
BGreen='\033[1;32m'
BPurple='\033[1;34m'
Red='\033[0;31m'
#-------------------
function_formatString()
{
  TEXT=$1
  TEXT_LENGTH=${#TEXT}
  MAX_CHARS=72
  CHARS_IN=$((MAX_CHARS-TEXT_LENGTH))
  CHARS_ACTUAL=$(((CHARS_IN/2)-2))
  BUILDED_STRING=""

  for ((n=0;n<"$CHARS_ACTUAL";n++))
    do
      BUILDED_STRING+="-"
    done
  if [ $((TEXT_LENGTH%2)) -eq 1 ]; then
    BUILDED_STRING+="-"
  fi

  BUILDED_STRING+="< $TEXT >"

  for ((n=0;n<"$CHARS_ACTUAL";n++))
      do
        BUILDED_STRING+="-"
      done

  echo "$BUILDED_STRING"
}
#-------------------

#Entry point
echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Starting setup")"
echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Define environment")"

#Setting up environment
CURRENT_DIR=$(pwd)
SHELL_DIR=$(dirname "$0")
OS=$(uname -s)
DB=false

#Creation of Database-Container
echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Initiating database environment")"

result=$( docker ps -a -q -f name="monetaDatabase" )
cd "$SHELL_DIR" || exit

echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Start database")"

if [ "$result" != "" ]; then
  echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Container already exists")"
  DB=true
else
  echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Creating container")"

  if [ "$OS" == "Darwin" ]; then
    sudo docker compose up -d
  elif [ "$OS" == "Msys" ]; then
    docker compose up -d
  fi

  DB=true

fi

echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Finished database setup")"

if $DB; then
  echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Setting up dev environment")"
  echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Installing Node-Packages")"

  cd moneta-ui/ || exit
  npm ci
  cd ..

  echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Migrating database")"

  cd moneta-api/ || exit
  php artisan migrate:fresh
  php artisan serve
else
  echo "[${Red}ERROR${Color_Off}] $(function_formatString "Step skipped, error occurred")"
fi

cd "${CURRENT_DIR}" || exit
echo "[${BPurple}INFO${Color_Off}] $(function_formatString "Script finished")"
