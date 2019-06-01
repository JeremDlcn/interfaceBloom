import MySQLdb

#ouvre la base de données et se connecter
db = MySQLdb.connect("localhost","root",'','plante')

cursor = db.cursor()

#ouverture du fichier contenant les informations venant des capteurs
file = open("/home/mesures.txt", 'r')

#délimité les données pour les différenciés et les utilisés
for line in file:
    row = line.split(';')

#insertion des mesures provenant de l'arduino dans la table plante
#les row[] correspondent à l'emplacement des mesures délimité au préalable
sql = """INSERT INTO mesures(temperature, luminosite, humidite, date, id_plante)
	VALUES(row[1], row[2],row[3],row[4],row[5]))"""


try:
	cursor.execute(sql)
	db.commit()

except:
	db.rollback()


#déconnexion du serveur
db.close