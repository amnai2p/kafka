# kafka
Get Topics list and Single Topic configuration using Shell and Curl

#Installation
Confluent
Required Ports: 
  9092 - broker
  2181 - zookeeper
Installation:
    1. Install the Confluent public key. This key is used to sign the packages in the APT repository.
        wget -qO - https://packages.confluent.io/deb/5.0/archive.key | sudo apt-key add -
        The Output should be: OK
    2. Add the repository to your /etc/apt/sources.list by running this command:
      sudo add-apt-repository "deb [arch=amd64] https://packages.confluent.io/deb/5.0 stable main"
    3. Update apt-get and install the entire Confluent Platform platform. (Confluent Open Source)
      sudo apt-get update && sudo apt-get install confluent-platform-oss-2.11

