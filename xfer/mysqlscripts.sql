-- initial create script

CREATE TABLE `youtubes` (
 `Id` int(11) NOT NULL AUTO_INCREMENT,
 `VidName` varchar(50) NOT NULL,
 `VidUrl` varchar(50) NOT NULL,
 `DateAdded` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
 PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4

-- add artist column

alter table youtubes add column VidArtist varchar(50) not null after VidName

-- split out vidname to name/artist columns

update youtubes set VidName = replace(Vidname, 'Hot Since 82 ', 'Hot Since 82-')

create table #tempArtistNames
(
artist varchar(50) not null
)

insert into #tempArtistNames (artist) values ('FKJ')
insert into #tempArtistNames (artist) values ('Acid Pauli')
insert into #tempArtistNames (artist) values ('El Buho')
insert into #tempArtistNames (artist) values ('Nicolas Jaar')
insert into #tempArtistNames (artist) values ('Nicola Cruz')
insert into #tempArtistNames (artist) values ('Bonobo')
insert into #tempArtistNames (artist) values ('Dixon')
insert into #tempArtistNames (artist) values ('Satori')
insert into #tempArtistNames (artist) values ('Black Sabbath')
insert into #tempArtistNames (artist) values ('Polo and Pan')
insert into #tempArtistNames (artist) values ('Nightmares On Wax')

