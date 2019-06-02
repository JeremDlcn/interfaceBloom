#include "DHT.h"
#define DHTPIN 7 // pin capteur DHT11
#define DHTTYPE DHT11 // DHT 11

DHT dht(DHTPIN, DHTTYPE);//déclaration du capteur
 
void setup()
{
 Serial.begin(9600);
 Serial.println("DHTxx test!");
 dht.begin();
}
void loop()
{
 delay(2000);
 
 float h = dht.readHumidity();//lire l'humidité
 float t = dht.readTemperature();//lire la température
 float f = dht.readTemperature(true);
 
 //On verifie si la lecture a echoue, si oui on quitte la boucle pour recommencer.
 if (isnan(h) || isnan(t) || isnan(f))
 {
   Serial.println("Failed to read from DHT sensor!");
   return;
 }
 
 // Calcul de l'indice de temperature en Celsius
 float hic = dht.computeHeatIndex(t, h, false);

 
 unsigned int AnalogValue;
 int value = 0;
 AnalogValue = analogRead(A0);//Lecture de la luminosité
 value = map(AnalogValue, 1023, 29, 0, 100); //changer la plage des valeurs, pour l'adapter en pourcentage
 
 //Affichages :
 Serial.print("Humidite: ");
 Serial.print(h);
 Serial.print(" %\t");
 Serial.print("Temperature: ");
 Serial.print(t);
 Serial.print(" *C ");
 Serial.print(f);
 Serial.print(" *F\t");
 Serial.print("Indice de temperature: ");
 Serial.print(hic);
 Serial.print(" *C ");
 Serial.print("Luminosité : ");
 Serial.println(value);
}
