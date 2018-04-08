create table categorie(
	id varchar(50),
	image varchar(100),
	imgDesc varchar(50),
	nom varchar(50),
	description varchar(250)
);

insert into categorie values('0','images/salon-moderne.jpg','salon-moderne','La salle de s&eacutejour','La salle de s&eacutejour, aussi appel&eacutee salon, est la pi&egravece du logement d&eacutedi&eacutee aux divertissements de la famille et &agrave la r&eacuteception des invit&eacutes.');
insert into categorie values('1','images/chambre-moderne.jpg','chambre-moderne','Chambre &agrave coucher','Une chambre &agrave coucher, ou plus usuellement chambre, est la pi&egravece d"une habitation destin&eacutee &agrave assurer le sommeil ou le repos de l"habitant, et qui comporte en principe au moins un lit.');
insert into categorie values('2','images/cuisine-moderne.jpg','cuisine-moderne','Cuisine','La cuisine est l"ensemble des techniques de pr&eacuteparation des aliments en vue de leur consommation par les &ecirc;tres humains. La cuisine est diverse &agrave travers le monde.');
insert into categorie values('3','images/salle-de-bain-moderne.jpg','salle-de-bain-moderne','Salle de bain','Une salle de bains est, dans un lieu d"habitation, une pi&egravece dans laquelle peuvent &ecirctre effectu&eacutees les op&eacuterations d"hygi&egravene corporelle : prendre un bain ou une douche, se laver les mains ou le visage, se raser, etc.');
insert into categorie values('4','images/toilette-moderne.jpg','toilette-moderne','Toilette','Quand il n"est pas employ&eacute dans une expression, le mot " toilettes " d&eacutesigne le local appel&eacute aussi cabinets ou " petit coin " consacr&eacute &agrave la discr&eacutetion et l"intimit&eacute du moment de soulagement ...');
insert into categorie values('5','images/jardin-moderne.jpg','jardin-moderne','Jardin','Un jardin est un lieu durablement et th&eacuteoriquement am&eacutenag&eacute o&ugrave l"on cultive de fa&ccedilon ordonn&eacutee des plantes domestiqu&eacutees ou s&eacutelectionn&eacutees.','images/Jardin.jpg');

create table utilisateur(
	username varchar(50),
	email varchar(50),
	mdp varchar(50)
);
