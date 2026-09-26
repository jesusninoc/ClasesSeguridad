# Sesión 16 — UD4. Análisis de tráfico y vulnerabilidades

## Objetivo de la sesión

- Comprender qué es el análisis de tráfico.
- Conocer Wireshark como herramienta de análisis.
- Identificar información que puede observarse en los paquetes.
- Detectar comunicaciones sin cifrar.
- Conocer el análisis de vulnerabilidades.
- Utilizar estas herramientas únicamente en redes propias o autorizadas.

---

# 1. Análisis de tráfico de red

Consiste en:

> **capturar y examinar los paquetes que circulan por una red.**

Permite conocer:

- Qué se transmite.
- Cómo se transmite.
- Qué protocolos se utilizan.
- Origen.
- Destino.

---

# 2. ¿Para qué sirve?

El análisis de tráfico permite:

- Entender el funcionamiento de la red.
- Comprender los protocolos.
- Detectar problemas.
- Detectar tráfico sospechoso.
- Detectar vulnerabilidades.
- Comprobar si determinados datos viajan sin cifrar.

---

# 3. Wireshark

**Wireshark** es:

> **un analizador de protocolos que captura el tráfico y lo muestra en detalle.**

Puede mostrar información como:

- Protocolos.
- Origen.
- Destino.
- Contenido de los paquetes.

---

# 4. Wireshark como herramienta de diagnóstico

Un técnico puede utilizar Wireshark para:

> **investigar qué está ocurriendo en una red.**

Por ejemplo:

```text
Aplicación
    ↓
Comunicación de red
    ↓
Wireshark
    ↓
Captura de paquetes
    ↓
Análisis
```

---

# 5. Detectar datos sin cifrar

Una de las demostraciones importantes de la unidad consiste en comprobar:

> **si los datos viajan cifrados o en claro.**

Si una aplicación transmite una contraseña sin cifrar:

> **la contraseña puede aparecer visible en el tráfico capturado.**

Esto constituye:

> **una vulnerabilidad grave para la privacidad.**

---

# 6. Ejemplo de la unidad

### Situación

Un técnico SMR quiere comprobar si las comunicaciones de una aplicación de la empresa son seguras.

### Estrategia

Utiliza:

> **Wireshark en una red propia y autorizada.**

Captura el tráfico mientras se utiliza la aplicación.

### Resultado

Detecta que:

> **la aplicación transmite datos, incluida una contraseña, sin cifrar.**

La vulnerabilidad queda demostrada.

---

# 7. Después de detectar la vulnerabilidad

El objetivo no es únicamente detectar el problema.

Hay que:

> **corregirlo y asegurar la comunicación.**

La unidad conecta esta detección con:

- Cifrado.
- HTTPS.
- VPN.

---

# 8. Análisis de vulnerabilidades

Además del tráfico de red:

> **también se pueden buscar vulnerabilidades en la red y en los sistemas.**

Los escáneres de vulnerabilidades pueden detectar:

- Puertos abiertos.
- Servicios inseguros.
- Fallos conocidos.

El objetivo es:

> **corregirlos antes de que sean aprovechados.**

---

# 9. Otras herramientas

Además de Wireshark, la unidad menciona:

- **tcpdump**
- Escáneres de red.
- Escáneres de vulnerabilidades.

---

# 10. Herramientas de doble uso

El análisis de tráfico es una:

> **herramienta de doble uso.**

Puede utilizarse para:

### Administración y seguridad

- Diagnosticar.
- Detectar problemas.
- Proteger.

### Ataques

- Interceptar comunicaciones.
- Analizar tráfico ajeno.

Por eso:

> **debe utilizarse con autorización.**

---

# 11. Uso responsable

Wireshark y los escáneres deben utilizarse:

> **solo en redes y sistemas propios o autorizados.**

La unidad indica expresamente:

> **analizar tráfico ajeno es ilegal.**

---

# 12. Idea fundamental

```text
Capturar
   ↓
Analizar
   ↓
Detectar
   ↓
Corregir
   ↓
Proteger
```

El análisis de tráfico sirve para:

> **entender y diagnosticar la red, pero también para comprobar si existen comunicaciones vulnerables.**

---

## Preguntas para clase

- ¿Qué es el análisis de tráfico?
- ¿Qué información podemos observar en los paquetes?
- ¿Qué es Wireshark?
- ¿Para qué sirve Wireshark?
- ¿Cómo podemos detectar una contraseña transmitida sin cifrar?
- ¿Qué es un escáner de vulnerabilidades?
- ¿Qué puede detectar?
- ¿Por qué se considera una herramienta de doble uso?
- ¿Dónde podemos utilizar legalmente Wireshark?
- ¿Qué debemos hacer después de detectar una comunicación sin cifrar?
