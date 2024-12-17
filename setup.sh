#Define Text-Colors
Color_Off='\033[0m'
Cyan='\033[0;36m'
Green='\033[0;32m'
BGreen='\033[1;32m'
BPurple='\033[1;34m'
#-------------------

#Entry point
echo "[${BPurple}INFO${Color_Off}] --- ${Green}Starting setup${Color_Off} ---"

CURRENT_DIR=$(pwd)
SHELL_DIR=$(dirname "$0")
OS=$(uname -s)

echo "[${BPurple}INFO${Color_Off}] --- ${Green}Initiating database${Color_Off} ---"

result=$( docker ps -a -q -f name="monetaDatabase" )

if [ "$result" != "" ]; then
  echo "[${BPurple}INFO${Color_Off}] --- ${Green}Container already exists${Color_Off} ---"
else
  echo "[${BPurple}INFO${Color_Off}] --- ${Green}Creating container${Color_Off} ---"
  cd "$SHELL_DIR" || exit

  if [ "$OS" == "Darwin" ]; then
    sudo docker compose up -d
  elif [ "$OS" == "Msys" ]; then
    docker compose up -d
  fi
fi

echo "[${BPurple}INFO${Color_Off}] --- ${Green}Finished database setup${Color_Off} ---"
echo "[${BPurple}INFO${Color_Off}] --- ${Green}Setting up environment${Color_Off} ---"

cd moneta-ui/ || exit
npm ci

cd "${CURRENT_DIR}" || exit
echo "[${BPurple}INFO${Color_Off}] --- ${Green}Script finished${Color_Off} ---"
