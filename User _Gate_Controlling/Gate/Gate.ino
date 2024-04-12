//#include <FirebaseArduino.h>
#include <FirebaseESP32.h>
#if defined(ESP32)
#include <WiFi.h>
#elif defined(ESP8266)
#include <ESP8266WiFi.h>

#endif

#define WIFI_SSID "Dialog 4G 731" // your wifi SSID
#define WIFI_PASSWORD "9C197FD3" //your wifi PASSWORD

#define FIREBASE_HOST "leds-e16a0-default-rtdb.firebaseio.com" // change here
#define FIREBASE_AUTH "9TFCt16tBufXk4uxZoLhQGadKWaNyvgX6A8RgnB8"  // your private key
FirebaseData firebaseData;

int ledPower = 18;  

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
  pinMode(ledPower,OUTPUT);
  
}

void loop() {
   
//User gate
if(Firebase.getString(firebaseData, "/GateStatus"))
  {
    String GateStatus = firebaseData.stringData();
    if(GateStatus.toInt() == 1){
      digitalWrite(ledPower, HIGH);
//      Serial.println("on");  
    }
    else {
      digitalWrite(ledPower, LOW);
//      Serial.println("off");  
     }
  }
}
