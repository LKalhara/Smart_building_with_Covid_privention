//#include <FirebaseArduino.h>
#include <FirebaseESP32.h>
#if defined(ESP32)
#include <WiFi.h>
#elif defined(ESP8266)
#include <ESP8266WiFi.h>

#endif

#define WIFI_SSID "Dialog 4G 731" // your wifi SSID
#define WIFI_PASSWORD "9C197FD3" //your wifi PASSWORD

#define FIREBASE_HOST "hello-967ee-default-rtdb.firebaseio.com" // change here
#define FIREBASE_AUTH "6TF6u5rlzgQsXYrxd4aEaz41mDI9AaCyDUIBIG1f"  // your private key
FirebaseData firebaseData;

int Power1 = 18; 
int Power2 = 18;
int Power3 = 18;
int Power4 = 18;
int Power5 = 18; 

void setup() {
  Serial.begin(9600);
  // connect to wifi.
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
  Serial.print("connecting");
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }
  Serial.println();
  Serial.println("Connected");
  Serial.println(WiFi.localIP());
  Firebase.begin(FIREBASE_HOST, FIREBASE_AUTH);
  pinMode(Power1,OUTPUT);
  pinMode(Power2,OUTPUT);
  pinMode(Power3,OUTPUT);
  pinMode(Power4,OUTPUT);
  pinMode(Power5,OUTPUT);
  
}

void loop() {
   
//airCondition
if(Firebase.getString(firebaseData, "/airCondition"))
  {
    String airCondition = firebaseData.stringData();
    if(airCondition.toInt() == 1){
      digitalWrite(Power1, HIGH);
//      Serial.println("on");  
    }
    else {
      digitalWrite(Power1, LOW);
//      Serial.println("off");  
     }
  }
  
  //cctv
  if(Firebase.getString(firebaseData, "/cctv"))
  {
    String cctv = firebaseData.stringData();
    if(cctv.toInt() == 1){
      digitalWrite(Power2, HIGH);
//      Serial.println("on");  
    }
    else {
      digitalWrite(Power2, LOW);
//      Serial.println("off");  
     }
  }
  
  //celllingFan
  if(Firebase.getString(firebaseData, "/celllingFan"))
  {
    String celllingFan = firebaseData.stringData();
    if(celllingFan.toInt() == 1){
      digitalWrite(Power3, HIGH);
//      Serial.println("on");  
    }
    else {
      digitalWrite(Power3, LOW);
//      Serial.println("off");  
     }
  }
  
  //loby
  if(Firebase.getString(firebaseData, "/loby"))
  {
    String loby = firebaseData.stringData();
    if(loby.toInt() == 1){
      digitalWrite(Power4, HIGH);
//      Serial.println("on");  
    }
    else {
      digitalWrite(Power4, LOW);
//      Serial.println("off");  
     }
  }
  
  //mainGate
  if(Firebase.getString(firebaseData, "/mainGate"))
  {
    String mainGate = firebaseData.stringData();
    if(mainGate.toInt() == 1){
      digitalWrite(Power5, HIGH);
//      Serial.println("on");  
    }
    else {
      digitalWrite(Power5, LOW);
//      Serial.println("off");  
     }
  }
}
