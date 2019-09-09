/* 
 Inspired by the code 'WebServer' by David A. Mellis, Tom Igoe, Arturo Guadalupi
 create by Dereck Pavez 
 */
#include <SPI.h>
#include <Ethernet.h>
#include "DHT.h"
byte mac[] = {
  0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED
};
IPAddress ip(192, 168, 0, 2);
EthernetServer server(80);
DHT dht(7, DHT11);

void setup() {
  Serial.begin(9600);
  dht.begin();
  Serial.println("Ethernet WebServer Example");
  Ethernet.begin(mac, ip);
  server.begin();
  Serial.print("server is at ");
  Serial.println(Ethernet.localIP());
}


void loop() {
  EthernetClient client = server.available();
  if (client) {
    boolean currentLineIsBlank = true;
    while (client.connected()) {
      if (client.available()) {
        char c = client.read();
        int h = dht.readHumidity();
        float t = dht.readTemperature(); 
        if (c == '\n' && currentLineIsBlank) {
          client.println("HTTP/1.1 200 OK");
          client.println("Content-Type: text/html");
          client.println("Connection: close");
          client.println("Refresh: 3");
          client.println();
          client.println("<!DOCTYPE HTML>");
          client.println("<html>");
          client.println("<head>");
          client.println("<title>Peso</title>");
          client.println("</head>");
          client.println("<body>");
          client.println("<form action=\"#\">"); // *\"http://192.168.0.19/arduino/index.php\" method=\"post\">");
          client.print("<div style=\"margin-top: 10%; display: flex; justify-content: center; align-items: center;\"><h1>Temperatura: <input name=\"temp\" value=\"");
          client.print(t);
          client.println("\" style=\"width:60px;height:30px;font-size: 18pt\" readonly>C</h1></div>");
          client.print("<div style=\"display: flex; justify-content: center; align-items: center;\"><h1>Humedad: <input name=\"hum\" value=\"");
          client.print(h);
          client.println("\" style=\"width:40px;height:30px;font-size: 18pt\" readonly>%</h1></div>");
          client.println("<div style=\"display: flex; justify-content: center; align-items: center;\"><input type=\"submit\"></div>");
          client.println("</form>");
          client.println("</body>");
          client.println("</html>");
          break;
        }
        if (c == '\n') {
          currentLineIsBlank = true;
        } else if (c != '\r') {
          currentLineIsBlank = false;
        }
      }
    }
    delay(1);
    client.stop();
  }
}
