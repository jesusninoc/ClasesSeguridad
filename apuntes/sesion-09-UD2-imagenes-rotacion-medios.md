# Sesión 9 — UD2. Imágenes, rotación y medios

## Objetivo de la sesión

- Comprender las imágenes de respaldo.
- Diferenciar imagen en frío e imagen en caliente.
- Conocer la frecuencia de las copias.
- Entender el esquema de rotación abuelo-padre-hijo.
- Conocer los principales medios extraíbles y el almacenamiento remoto.
- Aplicar medidas para conservar las copias de forma segura.

---

# 1. Imagen de respaldo

Una copia de seguridad de datos permite recuperar:

> **los archivos.**

Una imagen de respaldo permite recuperar:

- Sistema operativo.
- Programas.
- Configuración.
- Datos.

Es una copia de:

> **un disco o una partición completos.**

### Al restaurarla

El equipo puede quedar:

> **como estaba en el momento en que se hizo la imagen.**

---

# 2. Imagen en frío

Se realiza:

> **con el sistema parado.**

### Procedimiento

Se puede arrancar desde una memoria USB con una herramienta de clonado, como:

> **Clonezilla**

### Ventaja

- El disco no está escribiendo.
- La imagen es coherente.

### Inconveniente

- El equipo queda fuera de servicio mientras dura la copia.

---

# 3. Imagen en caliente

Se realiza:

> **con el sistema en funcionamiento.**

El problema es que el sistema puede estar escribiendo mientras se copia.

### Solución

Utilizar:

> **un mecanismo de instantáneas.**

La instantánea congela el estado del disco en un instante y permite copiar ese estado.

---

## 4. Tecnologías indicadas en la unidad

### Windows

**VSS — Servicio de instantáneas de volumen**

### Linux

- Instantáneas de **LVM**.
- **Btrfs**.
- **ZFS**.

---

# 5. Frío frente a caliente

| | Imagen en frío | Imagen en caliente |
|---|---|---|
| Sistema | Parado | En funcionamiento |
| Técnica | Clonado | Instantánea |
| Ejemplo | Clonezilla | VSS / LVM / Btrfs / ZFS |
| Ventaja | Imagen coherente | No es necesario parar el sistema |
| Inconveniente | Equipo fuera de servicio | Necesita mecanismo de instantáneas |

---

# 6. Verificar la imagen

Crear una imagen no es suficiente.

### Verificar

Comprobar su:

> **huella SHA-256**

### Probar

Restaurarla en:

- Un equipo.
- Una máquina virtual de prueba.

Y comprobar:

- Que arranca.
- Que las aplicaciones funcionan.

> **Verificar y probar son pasos diferentes.**

---

# 7. Frecuencia de las copias

La frecuencia depende de una pregunta:

> **¿Cuánto trabajo se puede permitir perder?**

### Si se puede perder:

- Una jornada → copia diaria.
- Una hora → copia cada hora.

---

# 8. Retención

También hay que determinar:

> **cuánto tiempo se necesita poder mirar atrás.**

Ejemplo conceptual:

Si un archivo se borró hace tres semanas:

> debe existir todavía una copia de hace tres semanas para poder recuperarlo.

---

# 9. Esquema de rotación

La rotación establece:

- Cuántos juegos de copias se mantienen.
- Cuáles se reutilizan.
- Cuándo se reutilizan.

El esquema presentado en la unidad es:

> **Abuelo – Padre – Hijo**

---

# 10. Hijos — Copias diarias

### Frecuencia

- Cada día laborable.

### Reciclado

- Cada semana.

### Permiten recuperar

> Cualquier día de los últimos siete.

---

# 11. Padres — Copias semanales

### Frecuencia

- Último día de cada semana.

### Conservación

- Un mes.

### Permiten recuperar

> Cualquiera de las últimas semanas.

---

# 12. Abuelos — Copias mensuales

### Frecuencia

- Último día de cada mes.

### Conservación

- Un año.
- O el tiempo que establezca la normativa aplicable.

### Permiten recuperar

> Cualquiera de los últimos meses.

---

# 13. Esquema abuelo-padre-hijo

```text
ABUELO
Mensual
   ↓
Se conserva un año
(o según normativa)

PADRE
Semanal
   ↓
Se conserva un mes

HIJO
Diario
   ↓
Se reutiliza cada semana
```

### Objetivo

Poder recuperar:

- Días recientes.
- Semanas anteriores.
- Meses anteriores.

Sin necesidad de conservar 365 copias.

---

# 14. Sustitución de soportes

Los soportes:

> **se desgastan.**

Por ello, el plan de rotación debe indicar:

- Cuándo retirar un soporte.
- Cuándo sustituirlo por uno nuevo.

---

# 15. Medios extraíbles

## Disco duro externo USB

### Ventajas

- Alta capacidad.
- Coste bajo.
- Habitual para la copia que se lleva fuera.

### Inconveniente

- Aguanta mal los golpes.
- No está pensado para años de archivo.

---

## Memoria USB y tarjetas

### Ventajas

- Cómodas.
- Adecuadas para volúmenes pequeños.
- Útiles para transportar una imagen de arranque.

### Inconvenientes

- Se pierden.
- Se rompen.
- Tienen una vida útil de escritura limitada.

> **No deben utilizarse como soporte único de copia.**

---

# 16. Cinta magnética — LTO

### Características

- Capacidad muy alta.
- Coste por dato muy bajo.
- Conservación durante décadas.

### Inconveniente

- Acceso secuencial.
- Recuperar un archivo suelto puede ser lento.
- Requiere una unidad de cinta.

---

# 17. Almacenamiento remoto

Puede realizarse:

- En otra ubicación de red.
- En la nube.

### Ventaja

La copia:

> **sale del edificio sin necesidad de transportarla físicamente.**

### Dependencias

- Ancho de banda de subida.
- Cumplimiento de la normativa de protección de datos por parte del proveedor.

---

# 18. Procedimiento con soportes extraíbles

### 1. Cifrar

- Cifrar el soporte antes de utilizarlo.
- Guardar la clave de recuperación aparte.

### 2. Etiquetar

Indicar:

- Fecha.
- Contenido.

### 3. Verificar

Comprobar la copia mediante:

> **SHA-256**

### 4. Expulsar de forma segura

- Desmontar el volumen antes de desconectarlo.

### 5. Custodiar fuera del sitio

- Otro edificio.
- O un armario ignífugo distinto de la sala de servidores.

---

# 19. Copia desconectada

La unidad indica que:

> **al menos una copia debe quedar desconectada del sistema.**

¿Por qué?

Porque el ransomware puede cifrar:

- Los datos montados.
- Las unidades de red.
- Los discos externos conectados.

Una copia desconectada:

> no puede ser alcanzada por el ataque a través de la red.

---

# 20. Ampliación: copias frente al ransomware

La unidad amplía la regla 3-2-1 con:

### Copias inmutables

Una vez realizadas:

- No se pueden modificar.
- No se pueden borrar.
- Durante un tiempo definido.

### Copias aisladas — Air-gap

Están:

> **físicamente desconectadas de la red.**

### Idea principal

```text
3-2-1
   +
Inmutable / Air-gap
   ↓
Mayor protección frente al ransomware
```

---

# 21. Copias en la nube

Las copias en la nube pueden proporcionar:

> **la copia fuera del sitio.**

La unidad menciona servicios de almacenamiento de objetos como:

> **Amazon S3**

con funciones como:

- **Versionado**
- **Object Lock**

### Versionado

Guarda:

> versiones anteriores.

### Object Lock

Permite:

> bloquear las copias para hacerlas inmutables.

---

# 22. Cifrado en reposo

Las copias deben estar:

> **cifradas cuando están almacenadas.**

Si alguien accede al soporte o al fichero:

> no puede leer la información sin la clave.

---

# 23. RPO

**RPO — Recovery Point Objective**

Indica:

> **cuántos datos se puede permitir perder.**

### Relación con la frecuencia

Si:

**RPO = 1 hora**

→ se copia cada hora.

---

# 24. RTO

**RTO — Recovery Time Objective**

Indica:

> **en cuánto tiempo hay que tener el sistema recuperado tras un desastre.**

---

# 25. RPO frente a RTO

| Concepto | Pregunta |
|---|---|
| RPO | ¿Cuántos datos puedo perder? |
| RTO | ¿Cuánto tiempo tengo para recuperar el sistema? |

```text
RPO → pérdida de datos
RTO → tiempo de recuperación
```

---

# 26. Pruebas periódicas de restauración

Hay que comprobar periódicamente:

> **que las copias se restauran correctamente.**

No basta con confiar en que la copia existe.

---

# Para recordar

```text
IMAGEN
├── Frío → sistema parado
└── Caliente → sistema funcionando + instantánea

ROTACIÓN
├── Hijo → diario
├── Padre → semanal
└── Abuelo → mensual

MEDIOS
├── Disco externo
├── USB / tarjetas
├── LTO
└── Red / nube

PROTECCIÓN
├── Cifrado
├── Verificación SHA-256
├── Fuera del sitio
├── Desconectada
└── Inmutable / air-gap

RECUPERACIÓN
├── RPO → pérdida de datos
└── RTO → tiempo de recuperación
```

---

## Preguntas para clase

- ¿Qué diferencia hay entre una copia de datos y una imagen?
- ¿Qué diferencia hay entre imagen en frío y en caliente?
- ¿Qué función tiene una instantánea?
- ¿Qué tecnologías aparecen para Windows y Linux?
- ¿Qué significa hijo, padre y abuelo?
- ¿Cuánto tiempo se conserva una copia padre?
- ¿Cuánto tiempo se conserva una copia abuelo?
- ¿Por qué hay que sustituir periódicamente los soportes?
- ¿Qué ventajas e inconvenientes tiene el disco externo?
- ¿Por qué una memoria USB no debe ser el único soporte de copia?
- ¿Qué características tiene LTO?
- ¿Qué significa una copia air-gap?
- ¿Qué diferencia hay entre inmutable y desconectada?
- ¿Qué aportan el versionado y Object Lock?
- ¿Qué significa RPO?
- ¿Qué significa RTO?
