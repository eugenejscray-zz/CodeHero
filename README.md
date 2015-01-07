#On a fresh install on vagrant (vm ware) of ubuntu please run the following script.

apt-get update
apt-get install -y  php5 libapache2-mod-php5 php5-mysql php5-curl
/etc/init.d/apache2 restart

#run the php file with this command. edit the testscript.txt with the input wanted.
#this will effectively parse the testscript and output the anagram combinations to stdout
#run this in the file test.php is located at
php -f test.php testscript.txt

