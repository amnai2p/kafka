# kafka
Get Topics list and Single Topic configuration using Shell and Curl

# Confluent
Required Ports:<br />
    9092 - broker<br />
    2181 - zookeeper<br />
	
# Installation:
    1. Install the Confluent public key. This key is used to sign the packages in the APT repository.
        wget -qO - https://packages.confluent.io/deb/5.0/archive.key | sudo apt-key add -
        The Output should be: OK
    2. Add the repository to your /etc/apt/sources.list by running this command:
      sudo add-apt-repository "deb [arch=amd64] https://packages.confluent.io/deb/5.0 stable main"
    3. Update apt-get and install the entire Confluent Platform platform. (Confluent Open Source)
      sudo apt-get update && sudo apt-get install confluent-platform-oss-2.11
      
# Start-Up Services:
sudo systemctl <command> <service-name><br />
## Commands: <br />
1. Start<br />
2. Status<br />
3. Stop<br />
## Service Names:<br />
1. confluent-zoopkeeper<br />
2. confluent-kafka<br />
3. confluent-schema-registry <br />
Source: <a href="https://docs.confluent.io/current/installation/installing_cp/deb-ubuntu.html#get-the-software">here</a>

