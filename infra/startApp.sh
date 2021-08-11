#!/bin/bash

function devServerUp(){
  echo "Levantando servidor de Desarrollo..."
  docker-compose -f dev/docker-compose.yml up
}

function testServerUp(){
  echo "Levantando servidor de Testing..."
  docker-compose -f test/docker-compose.yml up
}

function prodServerUp(){
  echo "Levantando servidor de Produccion..."
  docker-compose -f prod/docker-compose.yml up
}

options=("Desarrollo" "Testing" "Produccion" "Salir")
select opt in ${options[@]};
do
  case $opt in
    Desarrollo)
      devServerUp
      ;;
    Testing)
      testServerUp
      ;;
    Produccion)
      prodServerUp
      ;;
    Salir)
      echo "Saliendo..."
      break
      ;;
    *)
      echo "Opcion no definida."
      ;;
  esac
done
