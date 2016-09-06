# LAMP - With CodeIgniter

## Usage

Ensure vagrant is installed. To start the virtual machine run:

```
vagrant up
```

The vm forwards from port 80 of the guest to port 5000 on the host so Apache and CodeIgniter should be available on `localhost:5000` after the vm has been provisioned.

To SSH into the vm run:

```
vagrant ssh
```

To shutdown the vm run:

```
vagrant halt
```

To destroy the vm run:

```
vagrant destroy
```

To check the vm status run;

```
vagrant status
```

## Config file

`install.conf` holds the installation configuration for interactive options.

## The Setup

The Vagranfile sets up a basic LAMP server on Ubuntu's Trusty Tahr (14.04). All packages are installed using `apt-get` rather than installing from source. The LAMP specs are:

- Apache 2.4.7
- PHP 5.59
- MySQL 14.14 Distrib 5.5.50
- PHPMyAdmin

MySQL has been secure using the `mysql_secure_installtion` script modified for non-interactive use. The script uses the `install.conf` configuration file instead of prompts.

PHPMyAdmin has been secured using by setting up access restrictions in `/etc/apache2/conf-enabled/phpmyadmin.conf`. This functions the same way .htaccess does but without the .htaccess file which is the recommend way of doing it.

