COMMENT=		turns Snort IDS into an IPS

DISTNAME=		snortips-6.2
PKGNAME=		${DISTNAME}
CATEGORIES=		net security

HOMEPAGE=		https://github.com/sonertari/UTMFW

MAINTAINER=		Soner Tari <sonertari@gmail.com>

# BSD
PERMIT_PACKAGE_CDROM=	Yes
PERMIT_PACKAGE_FTP=	Yes 
PERMIT_DISTFILES_FTP=	Yes 

MASTER_SITES=		${HOMEPAGE}/dmdocuments/

NO_BUILD=		Yes

RUN_DEPENDS=		net/p5-Net-IP

do-install:
	${INSTALL_SCRIPT} -m 755 ${WRKSRC}/snortips ${PREFIX}/sbin
	${INSTALL_DATA} -m 444 ${WRKSRC}/snortips.8 ${PREFIX}/man/man8
	${INSTALL_DATA_DIR} ${PREFIX}/share/examples/snortips/
	${INSTALL_DATA} -m 644 ${WRKSRC}/snortips.conf ${PREFIX}/share/examples/snortips

.include <bsd.port.mk>
