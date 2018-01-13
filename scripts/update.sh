#!/bin/bash

git pull --rebase origin master

vagrant reload --provision
