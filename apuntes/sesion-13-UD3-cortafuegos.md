# Sesión 13 — UD3. Cortafuegos

## Objetivo de la sesión

- Comprender qué es un cortafuegos.
- Diferenciar cortafuegos de host y de red/perímetro.
- Entender el filtrado mediante reglas.
- Conocer los principales criterios utilizados por las reglas.
- Aplicar el principio de permitir solo lo necesario.

---

# 1. ¿Qué es un cortafuegos?

Un **cortafuegos (firewall)** es un sistema:

> **software o hardware**

que filtra:

> **el tráfico de red según unas reglas.**

Su función es:

- Permitir tráfico legítimo.
- Bloquear tráfico no autorizado o peligroso.

---

# 2. ¿Qué controla?

Controla:

> **el tráfico que entra y sale del equipo.**

Por tanto, puede controlar:

- Conexiones entrantes.
- Conexiones salientes.

---

# 3. Cortafuegos de host

El **cortafuegos de host** es el que:

> **se ejecuta en el propio equipo y protege ese equipo.**

Se diferencia del:

> **cortafuegos de red/perímetro**, que protege toda una red.

---

# 4. Ejemplos

El material menciona:

### Windows

- Firewall de Windows / Windows Defender Firewall.

### Linux

- iptables.
- nftables.
- ufw.

---

# 5. Reglas del cortafuegos

El cortafuegos utiliza:

> **reglas**

para decidir:

- Qué conexiones se permiten.
- Qué conexiones se bloquean.

---

# 6. ¿En qué se pueden basar las reglas?

Las reglas pueden considerar:

### Puerto

Los servicios utilizan puertos.

Ejemplos del material:

- Web: **80 / 443**

---

### Dirección

Puede distinguir:

- Tráfico entrante.
- Tráfico saliente.

---

### Aplicación

Las reglas pueden tener en cuenta:

> **la aplicación que genera o recibe la conexión.**

---

### Origen / destino

También pueden considerar:

> **el origen o el destino de la conexión.**

---

# 7. Principio de mínimo

Por defecto, se suele:

> **bloquear todo lo entrante no solicitado**

y:

> **permitir solo lo necesario.**

Este es el:

> **principio de mínimo.**

---

# 8. ¿Por qué es importante?

El cortafuegos:

- Impide que atacantes y malware se conecten al equipo por puertos abiertos.
- Controla qué conexiones salen del equipo.
- Reduce la superficie de ataque.

---

# 9. Configuración básica

Para configurar un cortafuegos de host:

1. Activar el cortafuegos.
2. Permitir solo los servicios necesarios.
3. Bloquear el resto.
4. Revisar las reglas.

---

# 10. Antivirus y cortafuegos

No realizan la misma función.

### Antimalware

> Protege frente al malware.

### Cortafuegos

> Controla el tráfico de red.

Por tanto:

> **son medidas complementarias.**

Tener antivirus:

> **no hace innecesario el cortafuegos.**

---

# 11. Relación con el bastionado

El cortafuegos forma parte del:

> **bastionado del equipo.**

La idea general es:

```text
Antimalware
     +
Actualizaciones
     +
Contraseñas seguras
     +
Mínimo privilegio
     +
Servicios innecesarios desactivados
     +
Cortafuegos
     ↓
Equipo bastionado
```

---

## Para recordar

```text
CORTAFUEGOS
├── Filtra tráfico
├── Utiliza reglas
├── Entrante / saliente
├── Puerto
├── Aplicación
├── Origen / destino
└── Permitir solo lo necesario
```

### Diferencia fundamental

```text
Antimalware → malware
Cortafuegos → tráfico de red
```

---

## Preguntas para clase

- ¿Qué es un cortafuegos?
- ¿Qué diferencia hay entre software y hardware en un cortafuegos?
- ¿Qué es un cortafuegos de host?
- ¿Qué diferencia hay entre host y perímetro?
- ¿En qué elementos pueden basarse las reglas?
- ¿Qué significa tráfico entrante y saliente?
- ¿Qué significa el principio de mínimo?
- ¿Por qué se bloquea lo entrante no solicitado?
- ¿Cómo reduce el cortafuegos la superficie de ataque?
- ¿Por qué antivirus y cortafuegos son complementarios?
