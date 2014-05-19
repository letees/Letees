ShairPort
=========
By [James Laird](mailto:jhl@mafipulation.org) ([announcement](http://mafipulation.org/blagoblig/2011/04/08#shairport))
This is copied by the repo of the person below. Remember, this repository is only to understant and learn how to use Github, Raspberry Pi and repos. THANK YOU!

What it is
----------
This program emulates an AirPort Express for the purpose of streaming music from iTunes and compatible iPods and iPhones. It implements a server for the Apple RAOP protocol.
ShairPort does not support AirPlay v2 (video and photo streaming).

How to run it (Letees)
---------- 
Requirements

Raspberry Pi
SD Card that's 4GB or larger
Micro USB cable and power source (or Micro USB power adapter)
HDMI cable and compatible display
USB keyboard
Some speakers
Ethernet cable

I'm going to be using the Raspbian operating system. Raspbian is a Linux distribution that has been tweaked specifically for the Raspberry Pi. It's lightweight and easy to use, with all of the built-in hardware already configured with drivers and ready to go.

An AirPlay receiver does not necessarily need to be wireless and the Raspberry Pi I'll be configuring will make use of the Ethernet port and be connected via a cable to my home's network.

Update software using 
> sudo apt-get update && apt-get upgrade

Install all the Packages needed using this code
> sudo apt-get install avahi-utils build-essential chkconfig git libao-dev libavahi-client-dev libcrypt-openssl-rsa-perl libio-socket-inet6-perl libssl-dev libwww-perl pkg-config

To download Shairport use 
> git clone -b 1.0-dev git://github.com/letees/Letees/tree/master/Raspberry%20Pi/Shairport.git

Navigate to the folder we've just downloaded by using 
> cd Shairport

Then, install and configure Shairport by using 
> sudo ./configure && sudo make && sudo make install


Now, everytime you want to use Shairport, open LXterminal and write this three codes
> cd Shairport
> sudo ./configure && sudo make && sudo make install
> shairport -a "Raspberry Pi de Letees"



Thanks
------
Big thanks to David Hammerton for releasing an ALAC decoder, which is reproduced here in full.
Thanks to everyone who has worked to reverse engineer the RAOP protocol - after finding the keys, everything else was pretty much trivial.
Thanks also to Apple for obfuscating the private key in the ROM image, using a scheme that made the deobfuscation code itself stand out like a flare.
Thanks to Ten Thousand Free Men and their Families for having a computer and stuff.
Thanks to wtbw.

Contributors to version 1.x
---------------------------
* [James Laird](http://mafipulation.org)
* [Paul Lietar](http://www.lietar.net/~paul)
* [Quentin Smart](http://github.com/sm3rt)
* [Brendan Shanks](http://github.com/mrpippy)
* [Peter Körner](http://mazdermind.de)
* [Muffinman](http://github.com/therealmuffin)
* [Skaman](http://github.com/skaman)

Contributors to version 0.x
---------------------------
* [James Laird](mailto:jhl@mafipulation.org), author
* [David Hammerton](http://craz.net/), ALAC decoder
* [Albert Zeyer](http://www.az2000.de), maintainer
* [Preston Marshall](mailto:preston@synergyeoc.com)
* [Mads Mætzke Tandrup](mailto:mads@tandrup.org)
* [Martin Spasov](mailto:mspasov@gmail.com)
* [Oleg Kertanov](mailto:okertanov@gmail.com)
* [Rafał Kwaśny](mailto:mag@entropy.be)
* [Rakuraku Jyo](mailto:jyo.rakuraku@gmail.com)
* [Vincent Gijsen](mailto:vtj.gijsen@gmail.com)
* [lars](mailto:lars@namsral.com)
* [Stuart Shelton](https://blog.stuart.shelton.me/)
* [Andrew Webster](mailto:andywebs@gmail.com)

Known Ports and Tools
---------------------
* Java:
    * [JAirPort](https://github.com/froks/JAirPort)
    * [RPlay](https://github.com/bencall/RPlay)
* Windows:
    * [shairport4w](http://sf.net/projects/shairport4w)
* OS X:
    * [ShairportMenu](https://github.com/rcarlsen/ShairPortMenu), a GUI wrapper as a menu widget
    * [MacShairport](https://github.com/joshaber/MacShairport)
