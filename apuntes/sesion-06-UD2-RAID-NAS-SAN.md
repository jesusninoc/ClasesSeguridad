# Sesión 6 — UD2. RAID, NAS y SAN

## Objetivo de la sesión

- Comprender qué es RAID.
- Conocer los niveles RAID más comunes.
- Diferenciar NAS y SAN.
- Entender la función del almacenamiento seguro y centralizado.

---

## 1. RAID

**RAID (Redundant Array of Independent Disks)**

Técnica que agrupa varios discos físicos para que funcionen como uno.

### Dos objetivos

- **Redundancia:** protección frente al fallo de un disco.
- **Rendimiento:** mejora de la velocidad.

> RAID puede buscar redundancia, rendimiento o ambas.

---

## 2. ¿Por qué RAID?

Un disco puede fallar.

### Sin redundancia

```text
Disco único
    ↓
Fallo
    ↓
Pérdida de los datos
```

### Con RAID

```text
Varios discos
    ↓
Redundancia según el nivel
    ↓
Los datos pueden seguir disponibles
```

La tolerancia al fallo depende del nivel RAID utilizado.

---

## 3. RAID 0 — División / Striping

### Funcionamiento

- Reparte los datos entre varios discos.
- Mínimo: **2 discos**.
- Mejora el rendimiento.
- No proporciona redundancia.

### Si falla un disco

❌ Se pierde todo el conjunto.

> **RAID 0 → rendimiento, sin redundancia.**

---

## 4. RAID 1 — Espejo / Mirroring

### Funcionamiento

- Duplica los datos en dos discos.
- Mínimo: **2 discos**.
- Un disco mantiene una copia del otro.

### Si falla un disco

✅ El otro conserva los datos.

### Característica

- Buena redundancia.
- La capacidad útil es aproximadamente la mitad.

> **RAID 1 → espejo.**

---

## 5. RAID 5

### Funcionamiento

- Reparte datos y paridad entre los discos.
- Mínimo: **3 discos**.
- Tolera el fallo de **1 disco**.
- Los datos pueden reconstruirse.

### Idea principal

Buen equilibrio entre:

- Capacidad.
- Rendimiento.
- Seguridad.

> **RAID 5 → datos + paridad + tolerancia de 1 disco.**

---

## 6. RAID 6

### Funcionamiento

- Similar a RAID 5.
- Utiliza doble paridad.
- Mínimo: **4 discos**.
- Tolera el fallo de **2 discos**.

### Rendimiento

- Algo menor que RAID 5 en escritura.

> **RAID 6 → doble paridad + tolerancia de 2 discos.**

---

## 7. RAID 10

**RAID 1 + RAID 0**

### Combina

- Espejo.
- División.

### Características

- Mínimo: **4 discos**.
- Redundancia.
- Buen rendimiento.

> **RAID 10 → espejo + división.**

---

## 8. Comparación de RAID

| Nivel | Discos mínimos | Redundancia | Idea principal |
|---|---:|---|---|
| RAID 0 | 2 | No | Máximo rendimiento |
| RAID 1 | 2 | 1 disco | Espejo |
| RAID 5 | 3 | 1 disco | Equilibrio |
| RAID 6 | 4 | 2 discos | Doble paridad |
| RAID 10 | 4 | Por espejo | Rendimiento + redundancia |

---

## 9. RAID NO es una copia de seguridad

RAID protege principalmente frente a:

- Fallo de un disco.

RAID no protege frente a:

- Borrado.
- Virus.
- Ransomware.
- Desastres.

> **RAID complementa las copias de seguridad, pero no las sustituye.**

---

## 10. NAS

**NAS (Network Attached Storage)**

Dispositivo de almacenamiento conectado a la red.

### Ofrece

- Carpetas compartidas.
- Almacenamiento centralizado.
- Acceso a nivel de **archivos**.

### Características

- Sencillo.
- Adecuado para centralizar datos y copias.
- Acceso mediante la red.
- Protocolos habituales:
  - SMB.
  - NFS.
- Puede incorporar RAID.

> **NAS → almacenamiento a nivel de archivos.**

---

## 11. SAN

**SAN (Storage Area Network)**

Red dedicada de almacenamiento.

### Ofrece

- Almacenamiento a nivel de **bloques**.
- Conexión de servidores con sistemas de almacenamiento.
- Alta velocidad.

### Características

- Más compleja.
- Potente.
- Costosa.
- Orientada a grandes centros de datos y entornos exigentes.

> **SAN → almacenamiento a nivel de bloques mediante una red dedicada.**

---

## 12. NAS frente a SAN

| | NAS | SAN |
|---|---|---|
| Nivel | Archivos | Bloques |
| Red | Red habitual | Red dedicada |
| Complejidad | Sencilla | Mayor |
| Característica | Carpetas compartidas | Almacenamiento para servidores |
| Uso | Centralización de datos y copias | Grandes entornos y alta demanda |

---

## 13. Ventajas del almacenamiento en red

- **Centralización de datos**
  - Facilita su protección y copia.
- **Compartición**
  - Varios equipos pueden acceder al almacenamiento.
- **Escalabilidad**
  - Permite ampliar la capacidad.
- **Redundancia**
  - Puede incorporar RAID.

---

## Para recordar

```text
RAID
├── 0 → rendimiento
├── 1 → espejo
├── 5 → tolera 1 disco
├── 6 → tolera 2 discos
└── 10 → espejo + división

NAS → archivos
SAN → bloques

RAID ≠ copia de seguridad
```

---

## Preguntas para clase

- ¿Qué dos objetivos puede tener RAID?
- ¿Qué diferencia fundamental hay entre RAID 0 y RAID 1?
- ¿Cuántos discos necesita como mínimo RAID 5?
- ¿Cuántos discos puede tolerar RAID 6?
- ¿Qué combina RAID 10?
- ¿Por qué RAID no sustituye a las copias de seguridad?
- ¿NAS trabaja a nivel de archivos o de bloques?
- ¿SAN trabaja a nivel de archivos o de bloques?
- ¿Qué diferencia principal hay entre NAS y SAN?
