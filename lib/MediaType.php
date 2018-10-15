<?php

/*
 * This file is part of the ZealByte Util Package.
 *
 * (c) ZealByte <info@zealbyte.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ZealByte\Util
{
	/**
	 * MIME Type Utility
	 *
	 * @author Dustin Martella <dustin.martella@zealbyte.com>
	 */
	class MediaType
	{
		private static $mimes = [
			[
				0 => 'application/andrew-inset',
				1 => ['ez'],
			],
			[
				0 => 'application/chemtool',
				1 => ['cht'],
			],
			[
				0 => 'application/dicom',
				1 => ['dcm'],
			],
			[
				0 => 'application/docbook+xml',
				1 => ['docbook'],
			],
			[
				0 => 'application/ecmascript',
				1 => ['ecma'],
			],
			[
				0 => 'application/flash-video',
				1 => ['flv'],
			],
			[
				0 => 'application/illustrator',
				1 => ['ai'],
			],
			[
				0 => 'application/json',
				1 => ['json','map'],
				3 => ['web','source'],
			],
			[
				0 => 'application/javascript',
				1 => ['js'],
				3 => ['web','script'],
			],
			[
				0 => 'application/mac-binhex40',
				1 => [],
			],
			[
				0 => 'application/mathematica',
				1 => ['nb'],
			],
			[
				0 => 'application/msword',
				1 => ['doc'],
			],
			[
				0 => 'application/octet-stream',
				1 => ['bin'],
			],
			[
				0 => 'application/oda',
				1 => ['oda'],
			],
			[
				0 => 'application/ogg',
				1 => ['ogg'],
			],
			[
				0 => 'application/pdf',
				1 => ['pdf'],
			],
			[
				0 => 'application/pgp',
				1 => ['pgp'],
			],
			[
				0 => 'application/pgp-encrypted',
				1 => ['pgp','gpg'],
			],
			[
				0 => 'application/pgp-keys',
				1 => ['skr','pkr'],
			],
			[
				0 => 'application/pgp-signature',
				1 => ['sig'],
			],
			[
				0 => 'application/pkcs7-mime',
				1 => [],
			],
			[
				0 => 'application/pkcs7-signature',
				1 => ['p7s'],
			],
			[
				0 => 'application/postscript',
				1 => ['ps'],
			],
			[
				0 => 'application/rtf',
				1 => ['rtf'],
			],
			[
				0 => 'application/sdp',
				1 => ['sdp'],
			],
			[
				0 => 'application/smil',
				1 => ['smil','smi','sml'],
			],
			[
				0 => 'application/stuffit',
				1 => ['sit'],
			],
			[
				0 => 'application/vnd.corel-draw',
				1 => ['cdr'],
			],
			[
				0 => 'application/vnd.hp-hpgl',
				1 => ['hpgl'],
			],
			[
				0 => 'application/vnd.hp-pcl',
				1 => ['pcl'],
			],
			[
				0 => 'application/vnd.lotus-1-2-3',
				1 => ['123','wk1','wk3','wk4','wks'],
			],
			[
				0 => 'application/vnd.mozilla.xul+xml',
				1 => ['xul'],
			],
			[
				0 => 'application/vnd.ms-excel',
				1 => ['xls','xlc','xll','xlm','xlw','xla','xlt','xld'],
			],
			[
				0 => 'application/vnd.ms-powerpoint',
				1 => ['ppz','ppt','pps','pot'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.chart',
				1 => ['odc'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.database',
				1 => ['odb'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.formula',
				1 => ['odf'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.graphics',
				1 => ['odg'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.graphics-template',
				1 => ['otg'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.image',
				1 => ['odi'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.presentation',
				1 => ['odp'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.presentation-template',
				1 => ['otp'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.spreadsheet',
				1 => ['ods'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.spreadsheet-template',
				1 => ['ots'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.text',
				1 => ['odt'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.text-master',
				1 => ['odm'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.text-template',
				1 => ['ott'],
			],
			[
				0 => 'application/vnd.oasis.opendocument.text-web',
				1 => ['oth'],
			],
			[
				0 => 'application/vnd.palm',
				1 => ['pdb'],
			],
			[
				0 => 'application/vnd.rn-realmedia',
				1 => ['rm'],
			],
			[
				0 => 'application/vnd.rn-realmedia-secure',
				1 => ['rms'],
			],
			[
				0 => 'application/vnd.rn-realmedia-vbr',
				1 => ['rmvb'],
			],
			[
				0 => 'application/vnd.stardivision.calc',
				1 => ['sdc'],
			],
			[
				0 => 'application/vnd.stardivision.chart',
				1 => ['sds'],
			],
			[
				0 => 'application/vnd.stardivision.draw',
				1 => ['sda'],
			],
			[
				0 => 'application/vnd.stardivision.impress',
				1 => ['sdd','sdp'],
			],
			[
				0 => 'application/vnd.stardivision.mail',
				1 => ['smd'],
			],
			[
				0 => 'application/vnd.stardivision.math',
				1 => ['smf'],
			],
			[
				0 => 'application/vnd.stardivision.writer',
				1 => ['sdw','vor','sgl'],
			],
			[
				0 => 'application/vnd.sun.xml.calc',
				1 => ['sxc'],
			],
			[
				0 => 'application/vnd.sun.xml.calc.template',
				1 => ['stc'],
			],
			[
				0 => 'application/vnd.sun.xml.draw',
				1 => ['sxd'],
			],
			[
				0 => 'application/vnd.sun.xml.draw.template',
				1 => ['std'],
			],
			[
				0 => 'application/vnd.sun.xml.impress',
				1 => ['sxi'],
			],
			[
				0 => 'application/vnd.sun.xml.impress.template',
				1 => ['sti'],
			],
			[
				0 => 'application/vnd.sun.xml.math',
				1 => ['sxm'],
			],
			[
				0 => 'application/vnd.sun.xml.writer',
				1 => ['sxw'],
			],
			[
				0 => 'application/vnd.sun.xml.writer.global',
				1 => ['sxg'],
			],
			[
				0 => 'application/vnd.sun.xml.writer.template',
				1 => ['stw'],
			],
			[
				0 => 'application/vnd.wordperfect',
				1 => ['wpd'],
			],
			[
				0 => 'application/x-abiword',
				1 => ['abw', 'abw.crashed', 'abw.gz', 'zabw'],
			],
			[
				0 => 'application/x-amipro',
				1 => ['sam'],
			],
			[
				0 => 'application/x-anjuta-project',
				1 => ['prj'],
			],
			[
				0 => 'application/x-applix-spreadsheet',
				1 => ['as'],
			],
			[
				0 => 'application/x-applix-word',
				1 => ['aw'],
			],
			[
				0 => 'application/x-arc',
				1 => [],
			],
			[
				0 => 'application/x-archive',
				1 => ['a'],
			],
			[
				0 => 'application/x-arj',
				1 => ['arj'],
			],
			[
				0 => 'application/x-asax',
				1 => ['asax'],
			],
			[
				0 => 'application/x-ascx',
				1 => ['ascx'],
			],
			[
				0 => 'application/x-ashx',
				1 => ['ashx'],
			],
			[
				0 => 'application/x-asix',
				1 => ['asix'],
			],
			[
				0 => 'application/x-asmx',
				1 => ['asmx'],
			],
			[
				0 => 'application/x-asp',
				1 => ['asp'],
			],
			[
				0 => 'application/x-awk',
				1 => [],
			],
			[
				0 => 'application/x-axd',
				1 => ['axd'],
			],
			[
				0 => 'application/x-bcpio',
				1 => ['bcpio'],
			],
			[
				0 => 'application/x-bittorrent',
				1 => ['torrent'],
			],
			[
				0 => 'application/x-blender',
				1 => ['blender', 'blend', 'blend'],
			],
			[
				0 => 'application/x-bzip',
				1 => ['bz', 'bz2', 'bz2', 'bz'],
			],
			[
				0 => 'application/x-bzip-compressed-tar',
				1 => ['tar.bz', 'tar.bz2', 'tar.bz', 'tar.bz2', 'tbz', 'tbz2'],
			],
			[
				0 => 'application/x-cd-image',
				1 => ['iso'],
			],
			[
				0 => 'application/x-cgi',
				1 => ['cgi'],
			],
			[
				0 => 'application/x-chess-pgn',
				1 => ['pgn'],
			],
			[
				0 => 'application/x-chm',
				1 => ['chm'],
			],
			[
				0 => 'application/x-class-file',
				1 => [],
			],
			[
				0 => 'application/x-cmbx',
				1 => ['cmbx'],
			],
			[
				0 => 'application/x-compress',
				1 => ['z'],
			],
			[
				0 => 'application/x-compressed-tar',
				1 => ['tar.gz', 'tar.z', 'tgz', 'taz', 'tar.gz', 'tgz'],
			],
			[
				0 => 'application/x-config',
				1 => ['config'],
			],
			[
				0 => 'application/x-core',
				1 => [],
			],
			[
				0 => 'application/x-cpio',
				1 => ['cpio'],
			],
			[
				0 => 'application/x-cpio-compressed',
				1 => ['cpio.gz'],
			],
			[
				0 => 'application/x-csh',
				1 => ['csh'],
			],
			[
				0 => 'application/x-cue',
				1 => ['cue'],
			],
			[
				0 => 'application/x-dbase',
				1 => ['dbf'],
			],
			[
				0 => 'application/x-dbm',
				1 => [],
			],
			[
				0 => 'application/x-dc-rom',
				1 => ['dc'],
			],
			[
				0 => 'application/x-deb',
				1 => ['deb'],
			],
			[
				0 => 'application/x-designer',
				1 => ['ui'],
			],
			[
				0 => 'application/x-desktop',
				1 => ['desktop', 'kdelnk'],
			],
			[
				0 => 'application/x-devhelp',
				1 => ['devhelp'],
			],
			[
				0 => 'application/x-dia-diagram',
				1 => ['dia'],
			],
			[
				0 => 'application/x-disco',
				1 => ['disco'],
			],
			[
				0 => 'application/x-dvi',
				1 => ['dvi'],
			],
			[
				0 => 'application/x-e-theme',
				1 => ['etheme'],
			],
			[
				0 => 'application/x-egon',
				1 => ['egon'],
			],
			[
				0 => 'application/x-executable',
				1 => ['exe'],
				3 => ['binary','executable']
			],
			[
				0 => 'application/x-font-afm',
				1 => ['afm'],
			],
			[
				0 => 'application/x-font-bdf',
				1 => ['bdf'],
			],
			[
				0 => 'application/x-font-dos',
				1 => [],
			],
			[
				0 => 'application/x-font-framemaker',
				1 => [],
			],
			[
				0 => 'application/x-font-libgrx',
				1 => [],
			],
			[
				0 => 'application/x-font-linux-psf',
				1 => ['psf'],
			],
			[
				0 => 'application/x-font-otf',
				1 => ['otf'],
				3 => ['web','font'],
			],
			[
				0 => 'application/vnd.ms-fontobject',
				1 => ['eot'],
				3 => ['web','font'],
			],
			[
				0 => 'application/font-sfnt',
				1 => ['sfnt'],
				3 => ['web','font'],
			],
			[
				0 => 'application/font-woff',
				1 => ['woff'],
				3 => ['web','font'],
			],
			[
				0 => 'application/font-woff2',
				1 => ['woff2'],
				3 => ['web','font'],
			],
			[
				0 => 'application/x-font-pcf',
				1 => ['pcf', 'pcf.gz'],
			],
			[
				0 => 'application/x-font-speedo',
				1 => ['spd'],
			],
			[
				0 => 'application/x-font-sunos-news',
				1 => [],
			],
			[
				0 => 'application/x-font-tex',
				1 => [],
			],
			[
				0 => 'application/x-font-tex-tfm',
				1 => [],
			],
			[
				0 => 'application/x-font-ttf',
				1 => ['ttc','ttc','ttf'],
				3 => ['web','font'],
			],
			[
				0 => 'application/x-font-type1',
				1 => ['pfa', 'pfb', 'gsf', 'pcf.z'],
			],
			[
				0 => 'application/x-font-vfont',
				1 => [],
			],
			[
				0 => 'application/x-frame',
				1 => [],
			],
			[
				0 => 'application/x-frontline',
				1 => ['aop'],
			],
			[
				0 => 'application/x-gameboy-rom',
				1 => ['gb'],
			],
			[
				0 => 'application/x-gdbm',
				1 => [],
			],
			[
				0 => 'application/x-gdesklets-display',
				1 => ['display'],
			],
			[
				0 => 'application/x-genesis-rom',
				1 => ['gen', 'md'],
			],
			[
				0 => 'application/x-gettext-translation',
				1 => ['gmo'],
			],
			[
				0 => 'application/x-glabels',
				1 => ['glabels'],
			],
			[
				0 => 'application/x-glade',
				1 => ['glade'],
			],
			[
				0 => 'application/x-gmc-link',
				1 => [],
			],
			[
				0 => 'application/x-gnome-db-connection',
				1 => ['connection'],
			],
			[
				0 => 'application/x-gnome-db-database',
				1 => ['database'],
			],
			[
				0 => 'application/x-gnome-stones',
				1 => ['caves'],
			],
			[
				0 => 'application/x-gnucash',
				1 => ['gnucash', 'gnc', 'xac'],
			],
			[
				0 => 'application/x-gnumeric',
				1 => ['gnumeric'],
			],
			[
				0 => 'application/x-graphite',
				1 => ['gra'],
			],
			[
				0 => 'application/x-gtar',
				1 => ['gtar'],
			],
			[
				0 => 'application/x-gtktalog',
				1 => [],
			],
			[
				0 => 'application/x-gzip',
				1 => ['gz'],
			],
			[
				0 => 'application/x-gzpostscript',
				1 => ['ps.gz'],
			],
			[
				0 => 'application/x-hdf',
				1 => ['hdf'],
			],
			[
				0 => 'application/x-ica',
				1 => ['ica'],
			],
			[
				0 => 'application/x-ipod-firmware',
				1 => [],
			],
			[
				0 => 'application/x-jamin',
				1 => ['jam'],
			],
			[
				0 => 'application/x-jar',
				1 => ['jar'],
			],
			[
				0 => 'application/x-java',
				1 => [
					0 => 'class'],
			],
			[
				0 => 'application/x-java-archive',
				1 => ['jar', 'ear', 'war'],
			],
			[
				0 => 'application/x-jbuilder-project',
				1 => ['jpr', 'jpx'],
			],
			[
				0 => 'application/x-karbon',
				1 => ['karbon'],
			],
			[
				0 => 'application/x-kchart',
				1 => ['chrt'],
			],
			[
				0 => 'application/x-kformula',
				1 => ['kfo'],
			],
			[
				0 => 'application/x-killustrator',
				1 => ['kil'],
			],
			[
				0 => 'application/x-kivio',
				1 => ['flw'],
			],
			[
				0 => 'application/x-kontour',
				1 => ['kon'],
			],
			[
				0 => 'application/x-kpovmodeler',
				1 => [
					0 => 'kpm',
				],
			],
			[
				0 => 'application/x-kpresenter',
				1 => [
					0 => 'kpr',
					1 => 'kpt',
				],
			],
			[
				0 => 'application/x-krita',
				1 => [
					0 => 'kra',
				],
			],
			[
				0 => 'application/x-kspread',
				1 => [
					0 => 'ksp',
				],
			],
			[
				0 => 'application/x-kspread-crypt',
				1 => [],
			],
			[
				0 => 'application/x-ksysv-package',
				1 => [],
			],
			[
				0 => 'application/x-kugar',
				1 => [
					0 => 'kud',
				],
			],
			[
				0 => 'application/x-kword',
				1 => [
					0 => 'kwd',
					1 => 'kwt',
				],
			],
			[
				0 => 'application/x-kword-crypt',
				1 => [],
			],
			[
				0 => 'application/x-lha',
				1 => [
					0 => 'lha',
					1 => 'lzh',
					2 => 'lzh',
				],
			],
			[
				0 => 'application/x-lhz',
				1 => [
					0 => 'lhz',
				],
			],
			[
				0 => 'application/x-linguist',
				1 => [
					0 => 'ts',
				],
			],
			[
				0 => 'application/x-lyx',
				1 => [
					0 => 'lyx',
				],
			],
			[
				0 => 'application/x-lzop',
				1 => [
					0 => 'lzo',
				],
			],
			[
				0 => 'application/x-lzop-compressed-tar',
				1 => [
					0 => 'tar.lzo',
					1 => 'tzo',
				],
			],
			[
				0 => 'application/x-macbinary',
				1 => [],
			],
			[
				0 => 'application/x-machine-config',
				1 => [],
			],
			[
				0 => 'application/x-magicpoint',
				1 => [
					0 => 'mgp',
				],
			],
			[
				0 => 'application/x-master-page',
				1 => [
					0 => 'master',
				],
			],
			[
				0 => 'application/x-matroska',
				1 => [
					0 => 'mkv',
				],
			],
			[
				0 => 'application/x-mdp',
				1 => [
					0 => 'mdp',
				],
			],
			[
				0 => 'application/x-mds',
				1 => [
					0 => 'mds',
				],
			],
			[
				0 => 'application/x-mdsx',
				1 => [
					0 => 'mdsx',
				],
			],
			[
				0 => 'application/x-mergeant',
				1 => [
					0 => 'mergeant',
				],
			],
			[
				0 => 'application/x-mif',
				1 => [
					0 => 'mif',
				],
			],
			[
				0 => 'application/x-mozilla-bookmarks',
				1 => [],
			],
			[
				0 => 'application/x-mps',
				1 => [
					0 => 'mps',
				],
			],
			[
				0 => 'application/x-ms-dos-executable',
				1 => ['exe'],
			],
			[
				0 => 'application/x-mswinurl',
				1 => [],
			],
			[
				0 => 'application/x-mswrite',
				1 => ['wri'],
			],
			[
				0 => 'application/x-msx-rom',
				1 => ['msx'],
			],
			[
				0 => 'application/x-n64-rom',
				1 => ['n64'],
			],
			[
				0 => 'application/x-nautilus-link',
				1 => [],
			],
			[
				0 => 'application/x-nes-rom',
				1 => ['nes'],
			],
			[
				0 => 'application/x-netcdf',
				1 => ['cdf', 'nc'],
			],
			[
				0 => 'application/x-netscape-bookmarks',
				1 => [],
			],
			[
				0 => 'application/x-object',
				1 => ['o'],
			],
			[
				0 => 'application/x-ole-storage',
				1 => [],
			],
			[
				0 => 'application/x-oleo',
				1 => ['oleo'],
			],
			[
				0 => 'application/x-palm-database',
				1 => ['pdb', 'prc'],
			],
			[
				0 => 'application/x-par2',
				1 => ['par2', 'par2'],
				3 => ['source'],
			],
			[
				0 => 'application/x-pef-executable',
				1 => [],
			],
			[
				0 => 'application/x-perl',
				1 => ['pl', 'pm', 'al', 'perl'],
			],
			[
				0 => 'application/x-php',
				1 => [ 'php', 'php3', 'php4'],
				3 => ['source'],
			],
			[
				0 => 'application/x-pkcs12',
				1 => [ 'p12', 'pfx'],
			],
			[
				0 => 'application/x-planner',
				1 => ['planner', 'mrproject'],
			],
			[
				0 => 'application/x-planperfect',
				1 => ['pln'],
			],
			[
				0 => 'application/x-prjx',
				1 => ['prjx'],
			],
			[
				0 => 'application/x-profile',
				1 => [],
			],
			[
				0 => 'application/x-ptoptimizer-script',
				1 => ['pto'],
			],
			[
				0 => 'application/x-pw',
				1 => ['pw'],
			],
			[
				0 => 'application/x-python-bytecode',
				1 => ['pyc', 'pyo'],
			],
			[
				0 => 'application/x-quattro-pro',
				1 => ['wb1', 'wb2', 'wb3'],
			],
			[
				0 => 'application/x-quattropro',
				1 => ['wb1', 'wb2', 'wb3'],
			],
			[
				0 => 'application/x-qw',
				1 => ['qif'],
			],
			[
				0 => 'application/x-rar',
				1 => ['rar'],
			],
			[
				0 => 'application/x-rar-compressed',
				1 => ['rar'],
			],
			[
				0 => 'application/x-rdp',
				1 => ['rdp'],
			],
			[
				0 => 'application/x-reject',
				1 => ['rej'],
			],
			[
				0 => 'application/x-remoting',
				1 => ['rem'],
			],
			[
				0 => 'application/x-resources',
				1 => ['resources'],
			],
			[
				0 => 'application/x-resourcesx',
				1 => ['resx'],
			],
			[
				0 => 'application/x-rpm',
				1 => ['rpm'],
			],
			[
				0 => 'application/x-ruby',
				1 => [],
			],
			'application/x-sc' => [
				0 => 'application/x-sc',
				1 => ['sc'],
			],
			[
				0 => 'application/x-scribus',
				1 => ['sla', 'sla.gz', 'scd', 'scd.gz'],
			],
			[
				0 => 'application/x-shar',
				1 => ['shar'],
			],
			[
				0 => 'application/x-shared-library-la',
				1 => ['la'],
			],
			[
				0 => 'application/x-sharedlib',
				1 => ['so'],
			],
			[
				0 => 'application/x-shellscript',
				1 => ['sh'],
			],
			[
				0 => 'application/x-shockwave-flash',
				1 => ['swf'],
				3 => ['source'],
			],
			[
				0 => 'application/x-siag',
				1 => ['siag'],
			],
			[
				0 => 'application/x-slp',
				1 => [],
			],
			[
				0 => 'application/x-smil',
				1 => ['kino','smi','smil'],
			],
			[
				0 => 'application/x-sms-rom',
				1 => ['sms', 'gg'],
			],
			[
				0 => 'application/x-soap-remoting',
				1 => ['soap'],
			],
			[
				0 => 'application/x-streamingmedia',
				1 => ['ssm'],
			],
			[
				0 => 'application/x-stuffit',
				1 => ['bin', 'sit'],
			],
			[
				0 => 'application/x-sv4cpio',
				1 => ['sv4cpio'],
			],
			[
				0 => 'application/x-sv4crc',
				1 => ['sv4crc'],
			],
			[
				0 => 'application/x-tar',
				1 => ['tar'],
			],
			[
				0 => 'application/x-tarz',
				1 => ['tar.z'],
			],
			[
				0 => 'application/x-tex-gf',
				1 => ['gf'],
			],
			[
				0 => 'application/x-tex-pk',
				1 => ['k'],
			],
			[
				0 => 'application/x-tgif',
				1 => ['obj'],
			],
			[
				0 => 'application/x-theme',
				1 => ['theme'],
			],
			[
				0 => 'application/x-toc',
				1 => ['toc'],
			],
			[
				0 => 'application/x-toutdoux',
				1 => [],
			],
			[
				0 => 'application/x-trash',
				1 => ['bak', 'old', 'sik'],
			],
			[
				0 => 'application/x-troff',
				1 => ['tr', 'roff', 't'],
			],
			[
				0 => 'application/x-troff-man',
				1 => ['man'],
			],
			[
				0 => 'application/x-troff-man-compressed',
				1 => [],
			],
			[
				0 => 'application/x-tzo',
				1 => ['tar.lzo', 'tzo'],
			],
			[
				0 => 'application/x-ustar',
				1 => ['ustar'],
			],
			[
				0 => 'application/x-wais-source',
				1 => ['src'],
			],
			[
				0 => 'application/x-web-config',
				1 => [],
			],
			[
				0 => 'application/x-wpg',
				1 => ['wpg'],
			],
			[
				0 => 'application/x-wsdl',
				1 => ['wsdl'],
			],
			[
				0 => 'application/x-x509-ca-cert',
				1 => ['der','cer','crt','cert','pem'],
			],
			[
				0 => 'application/x-xbel',
				1 => ['xbel'],
			],
			[
				0 => 'application/x-zealbytesize',
				1 => [],
			],
			[
				0 => 'application/x-zoo',
				1 => ['zoo'],
			],
			[
				0 => 'application/xhtml+xml',
				1 => ['xhtml'],
			],
			[
				0 => 'application/zip',
				1 => ['zip'],
			],
			[
				0 => 'audio/ac3',
				1 => ['ac3'],
			],
			[
				0 => 'audio/basic',
				1 => ['au','snd'],
			],
			[
				0 => 'audio/midi',
				1 => ['mid','midi'],
			],
			[
				0 => 'audio/mpeg',
				1 => ['mp3'],
			],
			[
				0 => 'audio/prs.sid',
				1 => ['sid','psid'],
			],
			[
				0 => 'audio/vnd.rn-realaudio',
				1 => ['ra'],
			],
			[
				0 => 'audio/x-aac',
				1 => ['aac'],
			],
			[
				0 => 'audio/x-adpcm',
				1 => [],
			],
			[
				0 => 'audio/x-aifc',
				1 => [],
			],
			[
				0 => 'audio/x-aiff',
				1 => ['aif','aiff','aiff','aif','aifc'],
			],
			[
				0 => 'audio/x-aiffc',
				1 => [],
			],
			[
				0 => 'audio/x-flac',
				1 => ['flac'],
			],
			[
				0 => 'audio/x-m4a',
				1 => ['m4a'],
			],
			[
				0 => 'audio/x-mod',
				1 => ['mod','ult','uni','xm','m15','mtm','669'],
			],
			[
				0 => 'audio/x-mp3-playlist',
				1 => [],
			],
			[
				0 => 'audio/x-mpeg',
				1 => [],
			],
			[
				0 => 'audio/x-mpegurl',
				1 => ['m3u'],
			],
			[
				0 => 'audio/x-ms-asx',
				1 => [],
			],
			[
				0 => 'audio/x-pn-realaudio',
				1 => ['ra','ram','rm','ram','rmm'],
			],
			[
				0 => 'audio/x-riff',
				1 => [],
			],
			[
				0 => 'audio/x-s3m',
				1 => ['s3m'],
			],
			[
				0 => 'audio/x-scpls',
				1 => ['pls','pls','xpl'],
			],
			[
				0 => 'audio/x-stm',
				1 => ['stm'],
			],
			[
				0 => 'audio/x-voc',
				1 => ['voc'],
			],
			[
				0 => 'audio/x-wav',
				1 => ['wav'],
			],
			[
				0 => 'audio/x-xi',
				1 => ['xi'],
			],
			[
				0 => 'audio/x-xm',
				1 => ['xm'],
			],
			[
				0 => 'image/bmp',
				1 => ['bmp'],
			],
			[
				0 => 'image/cgm',
				1 => ['cgm'],
			],
			[
				0 => 'image/dpx',
				1 => [],
			],
			[
				0 => 'image/fax-g3',
				1 => ['g3'],
			],
			[
				0 => 'image/g3fax',
				1 => [],
			],
			[
				0 => 'image/gif',
				1 => ['gif'],
				3 => ['web','image'],
			],
			[
				0 => 'image/ief',
				1 => ['ief'],
				3 => ['image'],
			],
			[
				0 => 'image/jpeg',
				1 => ['jpeg','jpg','jpe'],
				3 => ['web','image'],
			],
			[
				0 => 'image/jpeg2000',
				1 => ['jp2'],
				3 => ['image'],
			],
			[
				0 => 'image/png',
				1 => ['png'],
				3 => ['web','image'],
			],
			[
				0 => 'image/rle',
				1 => ['rle'],
				3 => ['image']
			],
			[
				0 => 'image/svg+xml',
				1 => ['svg'],
				3 => ['web','image']
			],
			[
				0 => 'image/tiff',
				1 => ['tif','tiff'],
				3 => ['image'],
			],
			[
				0 => 'image/vnd.djvu',
				1 => ['djvu','djv'],
			],
			[
				0 => 'image/vnd.dwg',
				1 => ['dwg'],
			],
			[
				0 => 'image/vnd.dxf',
				1 => ['dxf'],
			],
			[
				0 => 'image/x-3ds',
				1 => ['3ds'],
			],
			[
				0 => 'image/x-applix-graphics',
				1 => ['ag'],
			],
			[
				0 => 'image/x-cmu-raster',
				1 => ['ras'],
			],
			[
				0 => 'image/x-compressed-xcf',
				1 => ['xcf.gz','xcf.bz2'],
			],
			[
				0 => 'image/x-dcraw',
				1 => ['bay','bay','bmq','bmq','cr2','cr2','crw','crw','cs1','cs1','dc2','dc2','dcr','dcr','fff','fff','k25','k25','kdc','kdc','mos','mos','mrw','mrw','nef','nef','orf','orf','pef','pef','raf','raf','rdc','rdc','srf','srf','x3f','x3f'],
			],
			[
				0 => 'image/x-dib',
				1 => [],
			],
			[
				0 => 'image/x-eps',
				1 => ['eps','epsi','epsf'],
			],
			[
				0 => 'image/x-fits',
				1 => ['fits'],
			],
			[
				0 => 'image/x-fpx',
				1 => [],
			],
			[
				0 => 'image/x-icb',
				1 => ['icb'],
			],
			[
				0 => 'image/x-ico',
				1 => ['ico'],
				3 => ['web']
			],
			[
				0 => 'image/x-iff',
				1 => ['iff'],
			],
			[
				0 => 'image/x-ilbm',
				1 => ['ilbm'],
			],
			[
				0 => 'image/x-jng',
				1 => ['jng'],
			],
			[
				0 => 'image/x-lwo',
				1 => ['lwo','lwob'],
			],
			[
				0 => 'image/x-lws',
				1 => ['lws'],
			],
			[
				0 => 'image/x-msod',
				1 => ['msod'],
			],
			[
				0 => 'image/x-niff',
				1 => [],
			],
			[
				0 => 'image/x-pcx',
				1 => [],
			],
			[
				0 => 'image/x-photo-cd',
				1 => ['pcd'],
			],
			[
				0 => 'image/x-pict',
				1 => ['pict','pict1','pict2'],
			],
			[
				0 => 'image/x-portable-anymap',
				1 => ['pnm'],
			],
			[
				0 => 'image/x-portable-bitmap',
				1 => ['pbm'],
			],
			[
				0 => 'image/x-portable-graymap',
				1 => ['pgm'],
			],
			[
				0 => 'image/x-portable-pixmap',
				1 => ['ppm'],
			],
			[
				0 => 'image/x-psd',
				1 => ['psd'],
			],
			[
				0 => 'image/x-rgb',
				1 => ['rgb'],
			],
			[
				0 => 'image/x-sgi',
				1 => ['sgi'],
			],
			[
				0 => 'image/x-sun-raster',
				1 => ['sun'],
			],
			[
				0 => 'image/x-tga',
				1 => ['tga'],
			],
			[
				0 => 'image/x-win-bitmap',
				1 => ['cur'],
			],
			[
				0 => 'image/x-wmf',
				1 => ['wmf'],
			],
			[
				0 => 'image/x-xbitmap',
				1 => ['xbm'],
			],
			[
				0 => 'image/x-xcf',
				1 => ['xcf'],
			],
			[
				0 => 'image/x-xfig',
				1 => ['fig'],
			],
			[
				0 => 'image/x-xpixmap',
				1 => ['xpm'],
			],
			[
				0 => 'image/x-xwindowdump',
				1 => ['xwd'],
			],
			[
				0 => 'inode/blockdevice',
				1 => [],
			],
			[
				0 => 'inode/chardevice',
				1 => [],
			],
			[
				0 => 'inode/directory',
				1 => [],
			],
			[
				0 => 'inode/fifo',
				1 => [],
			],
			[
				0 => 'inode/mount-point',
				1 => [],
			],
			[
				0 => 'inode/socket',
				1 => [],
			],
			[
				0 => 'inode/symlink',
				1 => [],
			],
			[
				0 => 'message/delivery-status',
				1 => [],
			],
			[
				0 => 'message/disposition-notification',
				1 => [],
			],
			[
				0 => 'message/external-body',
				1 => [],
			],
			[
				0 => 'message/news',
				1 => [],
			],
			[
				0 => 'message/partial',
				1 => [],
			],
			[
				0 => 'message/rfc822',
				1 => [],
			],
			[
				0 => 'message/x-gnu-rmail',
				1 => [],
			],
			[
				0 => 'model/vrml',
				1 => ['wrl'],
			],
			[
				0 => 'multipart/alternative',
				1 => [],
			],
			[
				0 => 'multipart/appledouble',
				1 => [],
			],
			[
				0 => 'multipart/digest',
				1 => [],
			],
			[
				0 => 'multipart/encrypted',
				1 => [],
			],
			[
				0 => 'multipart/mixed',
				1 => [],
			],
			[
				0 => 'multipart/related',
				1 => [],
			],
			[
				0 => 'multipart/report',
				1 => [],
			],
			[
				0 => 'multipart/signed',
				1 => [],
			],
			[
				0 => 'multipart/x-mixed-replace',
				1 => [],
			],
			[
				0 => 'text/calendar',
				1 => ['vcs','ics'],
			],
			[
				0 => 'text/css',
				1 => ['css','cssl'],
				3 => ['web','style'],
			],
			[
				0 => 'text/directory',
				1 => ['vcf','vct','gcrd'],
			],
			[
				0 => 'text/enriched',
				1 => [],
			],
			[
				0 => 'text/html',
				1 => ['html','htm'],
				3 => ['web'],
			],
			[
				0 => 'text/htmlh',
				1 => [],
			],
			[
				0 => 'text/mathml',
				1 => ['mml'],
			],
			[
				0 => 'text/plain',
				1 => ['txt','asc'],
			],
			[
				0 => 'text/rdf',
				1 => ['rdf'],
			],
			[
				0 => 'text/rfc822-headers',
				1 => [],
			],
			[
				0 => 'text/richtext',
				1 => ['rtx'],
			],
			[
				0 => 'text/rss',
				1 => ['rss'],
			],
			[
				0 => 'text/sgml',
				1 => ['sgml','sgm'],
			],
			[
				0 => 'text/spreadsheet',
				1 => ['sylk','slk'],
			],
			[
				0 => 'text/tab-separated-values',
				1 => ['tsv'],
			],
			[
				0 => 'text/vnd.rn-realtext',
				1 => ['rt'],
			],
			[
				0 => 'text/vnd.wap.wml',
				1 => ['wml'],
			],
			[
				0 => 'text/x-adasrc',
				1 => ['adb','ads'],
			],
			[
				0 => 'text/x-authors',
				1 => [],
			],
			[
				0 => 'text/x-bibtex',
				1 => ['bib'],
			],
			[
				0 => 'text/x-boo',
				1 => ['boo'],
			],
			[
				0 => 'text/x-c++hdr',
				1 => ['hh'],
				3 => ['source'],
			],
			[
				0 => 'text/x-c++src',
				1 => ['cpp','cxx','cc','c','c++'],
				3 => ['source'],
			],
			[
				0 => 'text/x-chdr',
				1 => ['h','h++','hp'],
				3 => ['source'],
			],
			[
				0 => 'text/x-comma-separated-values',
				1 => ['csv'],
			],
			[
				0 => 'text/x-copying',
				1 => [],
			],
			[
				0 => 'text/x-credits',
				1 => [],
			],
			[
				0 => 'text/x-csrc',
				1 => ['c'],
			],
			[
				0 => 'text/x-dcl',
				1 => ['dcl'],
			],
			[
				0 => 'text/x-dsl',
				1 => ['dsl'],
			],
			[
				0 => 'text/x-dsrc',
				1 => ['d'],
			],
			[
				0 => 'text/x-dtd',
				1 => ['dtd'],
			],
			[
				0 => 'text/x-emacs-lisp',
				1 => ['el'],
			],
			[
				0 => 'text/x-fortran',
				1 => ['f'],
				3 => ['source'],
			],
			[
				0 => 'text/x-gettext-translation',
				1 => ['po'],
			],
			[
				0 => 'text/x-gettext-translation-template',
				1 => ['pot'],
			],
			[
				0 => 'text/x-gtkrc',
				1 => [],
			],
			[
				0 => 'text/x-haskell',
				1 => ['hs'],
			],
			[
				0 => 'text/x-idl',
				1 => ['idl'],
			],
			[
				0 => 'text/x-install',
				1 => [],
			],
			[
				0 => 'text/x-java',
				1 => ['java'],
				3 => ['source']
			],
			[
				0 => 'text/x-ksysv-log',
				1 => [],
			],
			[
				0 => 'text/x-literate-haskell',
				1 => ['lhs'],
			],
			[
				0 => 'text/x-log',
				1 => ['log'],
			],
			[
				0 => 'text/x-makefile',
				1 => [],
			],
			[
				0 => 'text/x-moc',
				1 => ['moc'],
			],
			[
				0 => 'text/x-msil',
				1 => ['il'],
			],
			[
				0 => 'text/x-nemerle',
				1 => ['n'],
			],
			[
				0 => 'text/x-objcsrc',
				1 => ['m'],
			],
			[
				0 => 'text/x-pascal',
				1 => ['p','pas'],
				3 => ['source'],
			],
			[
				0 => 'text/x-patch',
				1 => ['diff','patch'],
			],
			[
				0 => 'text/x-python',
				1 => ['py'],
				3 => ['source'],
			],
			[
				0 => 'text/x-readme',
				1 => [],
			],
			[
				0 => 'text/x-rng',
				1 => ['rng'],
			],
			[
				0 => 'text/x-scheme',
				1 => ['scm'],
			],
			[
				0 => 'text/x-setext',
				1 => ['etx'],
			],
			[
				0 => 'text/x-speech',
				1 => [],
			],
			[
				0 => 'text/x-sql',
				1 => ['sql'],
				3 => ['source'],
			],
			[
				0 => 'text/x-suse-ymp',
				1 => ['ymp'],
			],
			[
				0 => 'text/x-suse-ymu',
				1 => ['ymu'],
			],
			[
				0 => 'text/x-tcl',
				1 => ['tcl','tk'],
				3 => ['source'],
			],
			[
				0 => 'text/x-tex',
				1 => ['tex','ltx','sty','cls'],
			],
			[
				0 => 'text/x-texinfo',
				1 => ['texi','texinfo'],
			],
			[
				0 => 'text/x-texmacs',
				1 => ['tm','ts'],
			],
			[
				0 => 'text/x-troff-me',
				1 => ['me'],
			],
			[
				0 => 'text/x-troff-mm',
				1 => ['mm'],
			],
			[
				0 => 'text/x-troff-ms',
				1 => ['ms'],
			],
			[
				0 => 'text/x-uil',
				1 => ['uil'],
			],
			[
				0 => 'text/x-uri',
				1 => ['uri','url'],
			],
			[
				0 => 'text/x-vb',
				1 => ['vb'],
			],
			[
				0 => 'text/x-xds',
				1 => ['xds'],
			],
			[
				0 => 'text/x-xmi',
				1 => ['xmi'],
			],
			[
				0 => 'text/x-xsl',
				1 => ['xsl'],
			],
			[
				0 => 'text/x-xslfo',
				1 => ['fo','xslfo'],
			],
			[
				0 => 'text/x-xslt',
				1 => ['xslt','xsl'],
			],
			[
				0 => 'text/xmcd',
				1 => [],
			],
			[
				0 => 'text/xml',
				1 => ['xml'],
			],
			[
				0 => 'video/3gpp',
				1 => ['3gp'],
				3 => ['video'],
			],
			[
				0 => 'video/dv',
				1 => ['dv','dif'],
				3 => ['video'],
			],
			[
				0 => 'video/isivideo',
				1 => [],
				3 => ['video'],
			],
			[
				0 => 'video/mpeg',
				1 => ['mpeg','mpg','mp2','mpe','vob','dat'],
				3 => ['video'],
			],
			[
				0 => 'video/quicktime',
				1 => ['qt','mov','moov','qtvr'],
				3 => ['video'],
			],
			[
				0 => 'video/vivo',
				1 => [],
				3 => ['video'],
			],
			[
				0 => 'video/vnd.rn-realvideo',
				1 => ['rv'],
				3 => ['video'],
			],
			[
				0 => 'video/wavelet',
				1 => [],
				3 => ['video'],
			],
			[
				0 => 'video/x-3gpp2',
				1 => ['3g2'],
				3 => ['video'],
			],
			[
				0 => 'video/x-anim',
				1 => ['anim','animj','anim1','anim2','anim3','anim4','anim5','anim6','anim7','anim8','anim9','anim1j','anim2j','anim3j','anim4j','anim5j','anim6j','anim7j','anim8j','anim9j'],
				3 => ['video'],
			],
			[
				0 => 'video/x-avi',
				1 => [],
				3 => ['video'],
			],
			[
				0 => 'video/x-flic',
				1 => ['fli','flc'],
				3 => ['video'],
			],
			[
				0 => 'video/x-mng',
				1 => ['mng'],
				3 => ['video'],
			],
			[
				0 => 'video/x-ms-asf',
				1 => ['asf','asx'],
				3 => ['video'],
			],
			[
				0 => 'video/x-ms-wmv',
				1 => ['wmv'],
				3 => ['video'],
			],
			[
				0 => 'video/x-msvideo',
				1 => ['avi'],
				3 => ['video'],
			],
			[
				0 => 'video/x-nsv',
				1 => ['nsv'],
				3 => ['video'],
			],
			[
				0 => 'video/x-real-video',
				1 => [],
				3 => ['video'],
			],
			[
				0 => 'video/x-sgi-movie',
				1 => ['movie'],
				3 => ['video'],
			],
			[
				0 => 'application/x-java-jnlp-file',
				1 => ['jnlp'],
			],
			[
				0 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
				1 => ['docx'],
			],
			[
				0 => 'application/vnd.openxmlformats-officedocument.wordprocessingml.template',
				1 => ['dotx'],
			],
			[
				0 => 'application/vnd.ms-word.document.macroenabled.12',
				1 => ['docm'],
			],
			[
				0 => 'application/vnd.ms-word.template.macroenabled.12',
				1 => ['dotm'],
			],
			[
				0 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
				1 => ['xlsx'],
			],
			[
				0 => 'application/vnd.openxmlformats-officedocument.spreadsheetml.template',
				1 => ['xltx'],
			],
			[
				0 => 'application/vnd.ms-excel.sheet.macroenabled.12',
				1 => ['xlsm'],
			],
			[
				0 => 'application/vnd.ms-excel.template.macroenabled.12',
				1 => ['xltm'],
			],
			[
				0 => 'application/vnd.ms-excel.addin.macroenabled.12',
				1 => ['xlam'],
			],
			[
				0 => 'application/vnd.ms-excel.sheet.binary.macroenabled.12',
				1 => ['xlsb'],
			],
			[
				0 => 'application/vnd.openxmlformats-officedocument.presentationml.presentation',
				1 => ['pptx'],
			],
			[
				0 => 'application/vnd.openxmlformats-officedocument.presentationml.template',
				1 => ['potx'],
			],
			[
				0 => 'application/vnd.openxmlformats-officedocument.presentationml.slideshow',
				1 => ['ppsx'],
			],
			[
				0 => 'application/vnd.ms-powerpoint.addin.macroenabled.12',
				1 => ['ppam'],
			],
		];

		/**
		 *
		 */
		public static function findMimeByExtension (string $extension, array $tags = null, bool $strict = false) : ?string
		{
			$extension = strtolower(trim($extension));

			foreach (self::$mimes as $key => $mime)
				foreach ($mime[1] as $type_extension)
					if ($extension == $type_extension && self::checkTags($key, $tags, $strict))
						return $mime[0];

			return null;
		}

		/**
		 *
		 */
		private static function checkTags ($key, array $tags = null, bool $strict = false) : bool
		{
			if (empty($tags))
				return true;

			if (empty(self::$mimes[$key][3]))
				return false;

			$match = $strict ? count($tags) : 1;
			$intersect = array_intersect(self::$mimes[$key][3], $tags);

			if (count($intersect) >= $match)
				return true;

			return false;
		}
	}
}
