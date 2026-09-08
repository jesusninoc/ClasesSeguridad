# Sesión 5 — UD1. Control de acceso y listas de control

## 1. Control de acceso físico

### Pregunta fundamental

> **¿Quién puede acceder físicamente a los equipos?**

El acceso físico no autorizado puede permitir:

- Robo de equipos.
- Manipulación del hardware.
- Acceso a discos.
- Acceso a datos.
- Intentos de saltarse controles de seguridad.

---

## 2. Medidas de control de acceso físico

### Protección del espacio

- Salas cerradas.
- Llaves.
- Acceso restringido.

### Identificación

- Tarjetas.
- Códigos.
- Biometría.

### Registro

- Quién accede.
- Cuándo accede.

### Vigilancia

- Cámaras.
- Alarmas.

### Protección de equipos

- Anclajes.
- Cerraduras.
- Restricción de determinados puertos.
- Control del arranque desde medios externos en equipos sensibles.

---

## 3. Principio básico

```text
PERSONAL AUTORIZADO
        ↓
ACCESO
        ↓
REGISTRO
```

- Solo debe acceder quien esté autorizado.
- El acceso debe quedar registrado.

---

## 4. Listas de control de acceso — ACL

### ¿Qué es una ACL?

**ACL = Access Control List**

Lista asociada a un recurso que indica:

> **quién puede hacer qué sobre ese recurso.**

Puede aplicarse a:

- Carpetas.
- Archivos.
- Impresoras.
- Otros recursos.

---

## 5. Una entrada de ACL — ACE

Cada entrada contiene:

### Sujeto

**¿Quién?**

- Usuario.
- Preferentemente grupo.

### Permiso

**¿Qué puede hacer?**

- Leer.
- Escribir.
- Modificar.
- Ejecutar.
- Borrar.
- Cambiar permisos.

### Sentido

**¿Se concede o se deniega?**

---

## 6. Herencia

Los permisos pueden heredarse desde una carpeta hacia:

- Subcarpetas.
- Archivos.

### Ventaja

- Facilita la administración de muchos recursos.
- Evita configurar cada archivo individualmente.

---

## 7. Matriz de control de accesos

Permite representar la política de permisos de forma visual.

### Estructura

- **Filas → recursos**
- **Columnas → grupos**
- **Cruces → permisos**

### ¿Para qué sirve?

- Decidir.
- Documentar.
- Comprobar.

---

## 8. Principios de una buena política de acceso

### Mínimo privilegio

- Dar únicamente los permisos necesarios.
- Evitar permisos superiores por comodidad.

### Denegación por defecto

- Partir de la ausencia de acceso.
- Conceder únicamente lo necesario.

### Permisos a grupos

- Preferir grupos frente a permisos individuales.
- Facilita altas, cambios y bajas.

### Responsable por recurso

- Cada recurso debe tener una persona responsable de la política de acceso.

### Revisión periódica

- Revisar los permisos.
- Comprobar que siguen siendo necesarios.
- Revisar especialmente las bajas y cambios de funciones.

---

## 9. Política escrita ≠ configuración real

Una política puede estar correctamente diseñada y, aun así, no coincidir con la configuración real.

### Posibles desajustes

- Permisos individuales.
- Herencias modificadas.
- Permisos excesivos.
- Cuentas que ya no deberían tener acceso.
- Excepciones que se mantienen indefinidamente.

### Idea clave

> **Hay que comprobar que la configuración real coincide con la política definida.**

---

## 10. ACL en otros ámbitos

La misma idea aparece en:

- Archivos.
- Carpetas compartidas.
- Impresoras.
- Cortafuegos.
- Equipos de red.

### Concepto común

```text
¿QUIÉN / QUÉ?
      ↓
¿PUEDE HACER QUÉ?
      ↓
¿SOBRE QUÉ RECURSO?
```

---

## 11. Preguntas para clase

- ¿Qué diferencia hay entre acceso físico y acceso a un recurso?
- ¿Qué significa ACL?
- ¿Qué información contiene una ACE?
- ¿Qué es la herencia?
- ¿Qué significa mínimo privilegio?
- ¿Por qué es preferible trabajar con grupos?
- ¿Por qué hay que revisar periódicamente los permisos?
- ¿Puede una política estar bien diseñada y estar mal aplicada?

---

## 12. Para cerrar

### Debe quedar claro

- El acceso físico es una parte fundamental de la protección.
- Una **ACL** define permisos sobre recursos.
- Una **ACE** representa una entrada de la ACL.
- La matriz permite visualizar la política.
- Una buena política utiliza:
  - Mínimo privilegio.
  - Denegación por defecto.
  - Grupos.
  - Revisión periódica.
- La política debe contrastarse con la configuración real.
