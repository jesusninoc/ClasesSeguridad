# Sesión 2 — UD1. Fundamentos y principios de seguridad

## 1. Seguridad informática

- Protección de:
  - Equipos
  - Datos
  - Servicios
- Frente a:
  - Amenazas
  - Riesgos
  - Incidentes
- Objetivo: mantener los sistemas y la información **seguros y disponibles**.

---

## 2. ¿Qué hay que proteger?

### Activos

- **Equipos**
- **Datos**
- **Servicios**

> Idea clave: antes de elegir medidas de seguridad hay que identificar los activos que queremos proteger.

---

## 3. Tríada CID

### C — Confidencialidad

- La información solo debe ser accesible por personas **autorizadas**.
- Medidas relacionadas:
  - Contraseñas
  - Permisos
  - Cifrado

**Pregunta:** ¿qué ocurre si alguien accede a información que no debería poder consultar?

---

### I — Integridad

- La información debe ser:
  - Correcta
  - Completa
  - No modificada de forma indebida
- Puede verse afectada por:
  - Errores
  - Ataques
  - Manipulaciones
- Medidas relacionadas:
  - Permisos
  - Copias
  - Sumas de verificación

**Pregunta:** ¿qué ocurre si los datos siguen siendo accesibles pero han sido modificados?

---

### D — Disponibilidad

- La información y los servicios deben estar **accesibles cuando se necesitan**.
- Puede verse afectada por:
  - Fallos
  - Averías
  - Cortes de corriente
  - Ataques
- Medidas relacionadas:
  - Redundancia
  - Copias
  - SAI
  - Mantenimiento

**Pregunta:** ¿qué ocurre si los datos son correctos y están protegidos, pero no podemos acceder a ellos?

---

## 4. CID: relación entre los tres principios

| Principio | Pregunta que debemos hacernos |
|---|---|
| Confidencialidad | ¿Quién puede acceder? |
| Integridad | ¿La información sigue siendo correcta? |
| Disponibilidad | ¿Podemos acceder cuando la necesitamos? |

### Idea fundamental

Un incidente puede afectar a:

- Un único principio.
- Dos principios.
- Los tres principios.

---

## 5. Otros conceptos relacionados

### Autenticación

**¿Quién eres?**

- Comprobar la identidad.

### Autorización

**¿Qué puedes hacer?**

- Determinar los permisos.

### No repudio

**¿Puede una persona negar posteriormente una acción realizada?**

### Trazabilidad

**¿Podemos saber quién hizo qué?**

---

## 6. Esquema para recordar

```text
SEGURIDAD INFORMÁTICA
        │
        ├── Confidencialidad → quién puede acceder
        │
        ├── Integridad → información correcta
        │
        └── Disponibilidad → acceso cuando se necesita
```

---

## 7. Preguntas para clase

- ¿Qué diferencia hay entre autenticación y autorización?
- ¿Una contraseña protege principalmente qué principio CID?
- ¿Un SAI está relacionado especialmente con qué principio?
- ¿Puede un mismo incidente afectar a C, I y D?
- ¿Por qué la seguridad informática no consiste únicamente en evitar malware?

---

## 8. Para cerrar

### Debe quedar claro

- La seguridad informática protege **activos** frente a **riesgos**.
- La base es la tríada **CID**.
- **Confidencialidad → acceso autorizado.**
- **Integridad → información correcta.**
- **Disponibilidad → acceso cuando se necesita.**
- Autenticación, autorización, no repudio y trazabilidad complementan estos principios.
