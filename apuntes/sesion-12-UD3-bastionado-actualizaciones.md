# Sesión 12 — UD3. Bastionado y actualizaciones

## Objetivo de la sesión

- Comprender qué es el bastionado.
- Reducir la superficie de ataque de un sistema.
- Comprender la importancia de las actualizaciones.
- Conocer la gestión de vulnerabilidades.
- Relacionar vulnerabilidades, parcheo y configuraciones seguras.

---

# 1. Bastionado

**Bastionado / hardening**

Es el proceso de:

> **endurecer o reforzar la seguridad de un sistema.**

Su objetivo principal es:

> **reducir la superficie de ataque.**

---

# 2. Superficie de ataque

La superficie de ataque comprende:

> **los elementos del sistema que pueden ser utilizados para atacarlo.**

Por tanto:

> menos servicios, puertos y funciones innecesarios → menor superficie de ataque.

---

# 3. Medidas de bastionado

### Desactivar

- Servicios innecesarios.
- Puertos innecesarios.
- Funciones innecesarias.

### Eliminar

- Software que no se utiliza.

### Aplicar

- Configuración segura.
- Contraseñas seguras.
- Permisos adecuados.
- Cortafuegos.

### Mantener

- Todo actualizado.

### Seguir

- Guías de bastionado y buenas prácticas.

---

# 4. Actualizaciones y parcheo

El software presenta:

> **vulnerabilidades que se descubren continuamente.**

Los fabricantes publican:

> **actualizaciones o parches que corrigen esas vulnerabilidades.**

Por eso:

> **mantener todo actualizado es una de las medidas más importantes.**

---

# 5. ¿Qué ocurre con un sistema sin actualizar?

Un sistema sin parchear:

> **es un objetivo fácil.**

Muchos ataques aprovechan:

> **vulnerabilidades conocidas y ya corregidas mediante parches.**

El problema aparece cuando:

> el equipo no se ha actualizado.

---

# 6. Gestión de vulnerabilidades

Las vulnerabilidades del software se catalogan públicamente como:

> **CVE — Common Vulnerabilities and Exposures**

CVE proporciona:

> **un identificador único para cada fallo conocido.**

---

# 7. CVSS

Las vulnerabilidades se pueden puntuar mediante:

> **CVSS — Common Vulnerability Scoring System**

La puntuación va:

> **de 0 a 10.**

Permite valorar:

> **la gravedad de una vulnerabilidad.**

---

# 8. Priorizar la corrección

El técnico debe:

1. Conocer las vulnerabilidades.
2. Valorar su gravedad.
3. Priorizar su corrección.
4. Aplicar los parches.

> No todas las vulnerabilidades tienen la misma prioridad.

---

# 9. Parcheo continuo

El parcheo consiste en:

> **aplicar las actualizaciones de seguridad de forma regular y rápida.**

En entornos con muchos equipos:

- Puede haber herramientas que automaticen el despliegue de parches.

---

# 10. Guías de bastionado

El material menciona:

> **CIS Benchmarks**

Son:

> **configuraciones seguras probadas que sirven como referencia para reforzar sistemas.**

---

# 11. El usuario también forma parte de la seguridad

La seguridad activa no es únicamente técnica.

El material considera al usuario:

> **el eslabón más débil.**

Por ello son importantes:

- Concienciación.
- Formación.
- Reconocimiento del phishing.
- Reconocimiento de la ingeniería social.

---

# 12. Concienciación frente al phishing

Los usuarios deben aprender a:

- Reconocer correos fraudulentos.
- No hacer clic en enlaces sospechosos.
- No proporcionar contraseñas.
- Avisar ante situaciones extrañas.

También pueden realizarse:

> **simulacros de phishing.**

---

# 13. Relación entre medidas

```text
Vulnerabilidades
       ↓
Identificar
       ↓
Valorar gravedad
       ↓
Priorizar
       ↓
Parchear
       ↓
Bastionar
       ↓
Reducir superficie de ataque
```

---

# 14. Bastionado como conjunto

El bastionado de un equipo integra:

- Antimalware.
- Actualizaciones.
- Contraseñas seguras.
- Mínimo privilegio.
- Servicios y puertos innecesarios desactivados.
- Cortafuegos.

> El objetivo es dejar el sistema protegido activamente frente a los ataques.

---

## Para recordar

```text
BASTIONADO
   ↓
Endurecer el sistema
   ↓
Reducir superficie de ataque

ACTUALIZACIONES
   ↓
Corregir vulnerabilidades

CVE
   ↓
Identificador del fallo

CVSS
   ↓
Gravedad de 0 a 10

CIS BENCHMARKS
   ↓
Configuraciones seguras de referencia
```

---

## Preguntas para clase

- ¿Qué significa bastionar un sistema?
- ¿Qué es la superficie de ataque?
- ¿Qué elementos innecesarios podemos desactivar?
- ¿Por qué son importantes las actualizaciones?
- ¿Qué es una vulnerabilidad?
- ¿Qué significa CVE?
- ¿Para qué sirve CVSS?
- ¿Qué rango de puntuación utiliza CVSS?
- ¿Por qué hay que priorizar la corrección de vulnerabilidades?
- ¿Qué son los CIS Benchmarks?
- ¿Por qué la concienciación del usuario forma parte de la seguridad activa?
