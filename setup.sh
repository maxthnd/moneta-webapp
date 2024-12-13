#Define Text-Colors
Color_Off='\033[0m'
Cyan='\033[0;36m'
Green='\033[0;32m'
BGreen='\033[1;32m'
BPurple='\033[1;34m'
#-------------------

#Entry point
echo "[${BPurple}INFO${Color_Off}] --- ${Green}Starting Setup${Color_Off} ---"

SHELL_DIR=$(dirname "$0")
OS=$(uname -s)
echo "${OS}"

echo "[${BPurple}INFO${Color_Off}] --- ${Green}Initiating Database${Color_Off} ---"

result=$( docker ps -a -q -f name="monetaDatabase" )

if [ "$result" != "" ]; then
  echo "[${BPurple}INFO${Color_Off}] --- ${Green}Container already exists${Color_Off} ---"
else
  echo "[${BPurple}INFO${Color_Off}] --- ${Green}Creating Container${Color_Off} ---"
  cd "$SHELL_DIR" || exit

  if [ "$OS" == "Darwin" ]; then
    sudo docker compose up
  elif [ "$OS" == "Msys" ]; then
    docker compose up
  fi
fi
