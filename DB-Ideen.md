#Register

1.) Name des Podcasts 
- (Der Name Eures Podcasts.)


2.) URL des Podcasts 
- (Die URL der Seite, unter der Euer Podcast zu finden ist.)


3.) Link zum Meta-Zip
- (Packt bitte Intro, Outro und Cover des Podcasts in ein ZIP-File und ladet es an eine geeignete Stelle <br>
(eigener Space, Dropbox, etc.) hoch. Die URL zu diesem ZIP bitte hier angeben.)


4.) Name, Vorname
- (Euer vollständiger Name.)

5.) E-Mail Adresse
- (Eure Mail-Adresse unter der wir mit Euch Kontakt aufnehmen können.)

###DB Regist
<pre>
| id | date | key | podname | podurl | ziplink | username | mail | wichtel |<br>
</pre>

#### Infos
**id** 1

**date** 05.11.2013 12:13:35

**key** 1234567890123456789 => 3xmd5 (1234567890123456789) //auto

**podname** Podcastname

**podurl** http://podcastname.de

**ziplink** http://podcastname.de/intro.zip

**username** Max Mustermann

**mail** max.mustermann@podcastname.de

**wichtel** 6 //id to wichtelcast

<pre>
--
-- Datenbank: `podwichteln`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `podwichtel_user`
--

CREATE TABLE `podwichtel_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `date` varchar(19) NOT NULL,
  `key` varchar(40) NOT NULL,
  `podname` varchar(50) NOT NULL,
  `podurl` varchar(50) NOT NULL,
  `ziplink` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `wichtel` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=0 ;
</pre>
#Admin

- download metazip
- upload auphonic
- übersicht register
- verlosung + save
- edit inputs
- send mails (register thanks + key logins, verlosung)
