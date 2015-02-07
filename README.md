# phpDAVIDws
A class-based PHP platform for DAVID web services

Functional annotation is one of the fundamental step in downstream analysis in genomics and proteomics to give biological meaning to genes and proteins. 
DAVID (database for annotation, visualization and integrated discovery), 
is a web-based bioinformatics platform (http://david.abcc.ncifcrf.gov), 
that provides  tools for functional interpretation of large lists of genes/proteins (Huang et al., 2009).

Recently, DAVID team developed a web service interface by giving a full control over all its functionalities (Jiao et al., 2012). 
To connect and communicate with the David web service we need a client developed in a programming language of interest. 
Some clients have been already made available including; Python, Perl, Matlab, Java (  Jiao et al., 2012) and R (ref). 
PHP is one of most used web development programming language to develop online bioinformatics tools and a databases. 
But, currently there is no PHP based client is available to access the DAVID web services. 
Hence we developed a class-based PHP interface to DAVID-WS.

## Installation
To install, simply download phpDAVIDws and include the autoload.php to where you want to use the service. 

```php

require 'phpDAVIDws/david_autoloader.php';

```
## How to use
Users are required to register before using this service If you are a new user, please register at http://david.abcc.ncifcrf.gov/webservice/register.htm. 
     
```php
require 'phpDAVIDws/david_autoloader.php';

$service = new DAVIDWebService();
$email = "yourname@yourorganization.org";

$request = new authenticate($email);

//it will return a authenticateResponse object
$response = $service->authenticate($request);

if($response->getReturn() == "true"){
	//perform anaotation
}
else{
	//Register or check your email.
}

```