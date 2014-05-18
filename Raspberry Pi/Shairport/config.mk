CONFIG_AO=yes
CONFIG_AVAHI=yes
CONFIG_HAVE_GETOPT_H=yes
CFLAGS+=     -D_REENTRANT  
LDFLAGS+= -lm -lpthread -lssl -lcrypto   -lao   -lavahi-common -lavahi-client  
