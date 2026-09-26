# Sesión 15 — UD4. Amenazas en las comunicaciones

## Objetivo de la sesión

- Identificar las principales amenazas en las comunicaciones.
- Comprender qué ocurre cuando los datos viajan sin protección.
- Relacionar cada amenaza con el principio de seguridad que puede vulnerar.
- Identificar las situaciones de mayor riesgo.

---

# 1. Privacidad en las comunicaciones

Cuando la información sale del equipo y circula por:

- Internet.
- Wi-Fi.
- Una red.

puede quedar expuesta a:

- Interceptación.
- Lectura.
- Manipulación.

Sin protección:

> **los datos pueden viajar «en claro», es decir, de forma legible.**

---

# 2. Interceptación o escucha — Sniffing

El atacante:

> **captura el tráfico de la red y lee la información que pasa.**

Puede afectar a:

- Contraseñas.
- Datos.
- Información transmitida.

El riesgo aumenta:

> **cuando la información no está cifrada.**

### Principio afectado

> **Confidencialidad**

---

# 3. Ataque de intermediario — Man-in-the-Middle

En un ataque **MitM**:

> **el atacante se sitúa en medio de la comunicación entre dos partes.**

Puede:

- Leer la información.
- Modificar lo que se transmite.

Las partes pueden:

> **no darse cuenta de que existe un intermediario.**

### Principios afectados

- Confidencialidad.
- Integridad.

---

# 4. Suplantación — Spoofing

Consiste en:

> **hacerse pasar por otro equipo o servidor.**

El problema principal es que:

> **el receptor puede creer que se está comunicando con quien realmente no es.**

### Principio afectado

> **Autenticidad**

---

# 5. Modificación de los datos en tránsito

El atacante:

> **altera la información mientras circula por la red.**

Por ejemplo:

```text
Origen
  ↓
Dato original
  ↓
Atacante
  ↓
Dato modificado
  ↓
Destino
```

### Principio afectado

> **Integridad**

---

# 6. Denegación de servicio — DoS

Un ataque **DoS** busca:

> **saturar un servicio para que deje de funcionar.**

El objetivo no es necesariamente leer los datos, sino:

> **impedir que el servicio esté disponible.**

### Principio afectado

> **Disponibilidad**

---

# 7. Resumen de amenazas

| Amenaza | ¿Qué hace? | Principio afectado |
|---|---|---|
| Sniffing | Captura y lee tráfico | Confidencialidad |
| Man-in-the-Middle | Intercepta y puede modificar | Confidencialidad e integridad |
| Spoofing | Se hace pasar por otro | Autenticidad |
| Modificación | Altera los datos en tránsito | Integridad |
| DoS | Satura un servicio | Disponibilidad |

---

# 8. ¿Dónde existe más riesgo?

Especialmente en:

### Redes públicas o abiertas

Ejemplos:

- Wi-Fi de cafeterías.
- Aeropuertos.

¿Por qué?

> **Es más fácil interceptar el tráfico.**

### Comunicaciones por Internet sin cifrar

Los datos:

> **viajan «en claro».**

---

# 9. ¿Cómo se protege la comunicación?

La unidad plantea como solución:

> **cifrar las comunicaciones.**

De esta forma:

```text
Datos originales
      ↓
     Cifrado
      ↓
Datos ilegibles
      ↓
Intercepción
      ↓
El atacante no puede leerlos
```

El cifrado permite proteger la información aunque:

> **sea interceptada durante su recorrido.**

---

# 10. Idea fundamental

> **Los datos que viajan por una red no deben considerarse privados por el simple hecho de estar en tránsito.**

Si no están protegidos:

> **pueden ser interceptados y leídos.**

---

## Preguntas para clase

- ¿Qué es el sniffing?
- ¿Qué puede conseguir un atacante mediante sniffing?
- ¿Qué es un ataque Man-in-the-Middle?
- ¿Qué significa spoofing?
- ¿Qué principio de seguridad afecta a la modificación de datos?
- ¿Qué busca un ataque DoS?
- ¿Qué principio afecta principalmente un DoS?
- ¿Por qué las Wi-Fi públicas presentan mayor riesgo?
- ¿Qué significa que los datos viajen «en claro»?
- ¿Cuál es la principal medida de protección frente a la interceptación?
