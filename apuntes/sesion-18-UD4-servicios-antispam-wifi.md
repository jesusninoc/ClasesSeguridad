# Sesión 18 — UD4. Servicios de red, correo no deseado y Wi-Fi seguro

## Objetivo de la sesión

- Inventariar los servicios de red.
- Identificar puertos y direcciones de escucha.
- Desactivar servicios innecesarios.
- Comprender cómo reducir el correo no deseado.
- Conocer las principales propiedades de seguridad de las redes Wi-Fi.
- Diferenciar WEP, WPA/TKIP, WPA2/AES-CCMP y WPA3/SAE.

---

# 1. Inventariar los servicios de red

Cada servicio que escucha en la red:

> **es una puerta de entrada potencial.**

Por eso el primer paso es:

> **saber qué servicios están abiertos.**

---

# 2. Herramientas de inventario

### Linux

```bash
ss -tulpn
```

Muestra:

- Puertos TCP y UDP a la escucha.
- Proceso asociado.

### Windows

```text
netstat -ano
```

Muestra:

- Conexiones.
- Puertos.
- Identificador del proceso.

---

# 3. ¿Qué debemos mirar?

De cada línea interesan tres elementos:

1. **Puerto**
2. **Programa**
3. **Dirección de escucha**

---

# 4. Dirección de escucha

### 127.0.0.1

El servicio:

> **solo es accesible desde el propio equipo.**

No constituye una puerta hacia el exterior.

### 0.0.0.0

El servicio:

> **está abierto a toda la red.**

---

# 5. Control de servicios

Para cada servicio debemos preguntarnos:

> **¿Se utiliza?**

Si nadie lo utiliza:

> **se detiene y se deshabilita.**

Desactivarlo es preferible a:

> **confiar únicamente en el cortafuegos.**

---

# 6. Limitar la exposición

Si un servicio solo necesita funcionar localmente:

> **se limita su escucha a la dirección local.**

Si debe estar disponible para determinados equipos:

> **se restringe mediante el cortafuegos a los orígenes correspondientes.**

No debe exponerse:

> **a toda la red si no es necesario.**

---

# 7. Repetir el inventario

El inventario debe repetirse:

> **después de instalar software nuevo.**

¿Por qué?

Porque:

> **los programas pueden abrir nuevos puertos.**

---

# 8. Uso autorizado

La unidad advierte:

> **explorar los puertos de equipos que no son propios o de redes sin autorización puede constituir un delito.**

---

# 9. Correo no deseado

El correo no deseado:

> **no es solo una molestia.**

Puede:

- Consumir recursos.
- Ser una vía de entrada del phishing.

Reducirlo:

> **es una medida de seguridad.**

---

# 10. Filtro antispam

Debe estar:

> **activado y entrenado.**

Cuando el usuario marca un correo como no deseado:

> **el filtro aprende.**

Por eso:

> **no basta con borrar el mensaje.**

---

# 11. Revisar la carpeta de no deseado

Debe revisarse periódicamente.

¿Por qué?

Porque un filtro demasiado agresivo:

> **puede ocultar correos legítimos.**

Si un mensaje legítimo ha sido clasificado incorrectamente:

> **se marca como correo válido.**

---

# 12. Ante un correo no esperado

La unidad recomienda:

> **No responder.  
> No pulsar.  
> No descargar.**

Estas acciones pueden:

> **confirmar al remitente que la dirección existe y está activa.**

---

# 13. Publicidad y rastreo

En el navegador pueden utilizarse:

- Bloqueadores de anuncios.
- Bloqueadores de rastreadores.

También deben:

> **bloquearse las ventanas emergentes.**

Y debe existir:

> **desconfianza absoluta hacia los anuncios que ofrecen descargar programas.**

---

# 14. Seguridad Wi-Fi

Las redes inalámbricas tienen mayor exposición porque:

> **las tramas pueden capturarse desde fuera del edificio.**

Por eso:

> **el protocolo de seguridad del punto de acceso es fundamental.**

---

# 15. Red abierta

Una red abierta:

> **no utiliza cifrado.**

El tráfico:

> **viaja en claro.**

Un portal donde se aceptan condiciones:

> **no implica que el tráfico esté cifrado.**

La protección puede depender de:

- HTTPS.
- VPN.

---

# 16. WEP

**WEP** fue uno de los primeros sistemas de cifrado Wi-Fi.

Actualmente:

> **está completamente roto y no debe utilizarse.**

Si un punto de acceso solo admite WEP:

> **debe sustituirse el equipo.**

---

# 17. WPA con TKIP

Fue:

> **un mecanismo de transición para sustituir WEP.**

Actualmente:

> **también está descartado.**

---

# 18. WPA2 con AES-CCMP

La unidad lo considera:

> **el mínimo aceptable en una instalación actual.**

Su seguridad depende de:

> **la contraseña utilizada.**

Una contraseña:

- Larga.
- Aleatoria.

ofrece mayor seguridad.

---

# 19. WPA3 con SAE

**WPA3** es:

> **el estándar actual.**

Utiliza:

> **SAE**

y mejora la protección frente a intentos de probar contraseñas fuera de línea.

También:

> **cifra las redes abiertas.**

---

# 20. Configuraciones adicionales

Junto al protocolo Wi-Fi deben adoptarse otras medidas.

### Desactivar WPS

El WPS:

- Permite emparejamiento por botón.
- Puede utilizar un PIN.

La unidad recomienda:

> **desactivarlo.**

### Red de invitados

Debe estar:

> **separada y aislada.**

Así un dispositivo ajeno:

> **no puede ver los servidores de la red principal.**

### Credenciales de administración

Hay que:

> **cambiar las credenciales de administración del punto de acceso.**

No se deben mantener:

> **las credenciales de fábrica.**

---

# 21. Evolución de Wi-Fi

```text
Red abierta
     ↓
WEP
     ↓
WPA + TKIP
     ↓
WPA2 + AES-CCMP
     ↓
WPA3 + SAE
```

### Idea clave

> **Los protocolos antiguos no deben mantenerse por compatibilidad cuando ya no ofrecen seguridad suficiente.**

---

## Preguntas para clase

- ¿Por qué cada servicio de red es una posible puerta de entrada?
- ¿Para qué sirve `ss -tulpn`?
- ¿Para qué sirve `netstat -ano`?
- ¿Qué diferencia hay entre escuchar en 127.0.0.1 y 0.0.0.0?
- ¿Por qué debemos desactivar los servicios innecesarios?
- ¿Cuándo debemos repetir el inventario?
- ¿Por qué el spam es también un problema de seguridad?
- ¿Qué tres acciones debemos evitar ante un correo no esperado?
- ¿Qué ocurre con WEP?
- ¿Cuál es el mínimo aceptable indicado para una instalación actual?
- ¿Qué aporta WPA3?
- ¿Por qué debemos desactivar WPS?
- ¿Para qué sirve aislar la red de invitados?
