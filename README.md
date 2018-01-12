# SmartSchool 

Online education management system

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
```

### Installing

A step by step series of examples that tell you have to get a development env running

Say what the step will be

```
$ cd ${WORKDIR}
$ git clone git@github.com:educationappli/smartschool.git
```

Execute following command to bring the machine up

```
$ vagrant up
```

Fetch the latest source

```
$ cd ${WORKDIR}
$ git fetch --all
```

Execute following command to bring the machine up with re provisioning

```
$ vagrant up --provision
```

After vagrant machine got up, access following url to confirm whether project is running

http://10.10.10.10:8080/smartschool/

To register account use following url

http://10.10.10.10:8080/smartschool/register

After register logged in using following url

http://10.10.10.10:8080/smartschool/login

After successfull logged in should display following url

http://10.10.10.10:8080/smartschool/home

To logged into vagrant machine

```
$ vagrant ssh
```

or use anyother SSH client (Such as TeraTerm, Putty etc) using

```
10.10.10.10:22 or localhost:2222
```

After logged into vagrant machine use following command to enter webapp docker process

```
$ docker exec -it webapp bash
```


After logged into vagrant machine use following command to enter database docker process

```
$ docker exec -it database bash
```
