# Sesión 8 — UD2. Restauración e integridad

## Objetivo de la sesión

- Comprender la restauración de copias.
- Conocer el concepto de integridad.
- Utilizar hashes para comprobar cambios.
- Conocer otras técnicas para asegurar la integridad.

---

## 1. Restauración

La restauración consiste en:

> **recuperar los datos desde una copia de seguridad.**

### No basta con tener la copia

Hay que comprobar:

- Que existe.
- Que se puede restaurar.
- Que los datos son correctos.
- Que los datos están completos.

> **Una copia que nunca se ha probado puede no servir.**

---

## 2. Restauración verificada

El proceso puede plantearse así:

```text
Copia de seguridad
        ↓
Restauración
        ↓
Comprobar los datos
        ↓
Comprobar la integridad
```

La unidad plantea como entregable:

> **una política de copias con una restauración verificada.**

---

# 3. Integridad de la información

La integridad es uno de los pilares **CID**.

Significa garantizar que los datos:

- Son **correctos**.
- Son **completos**.
- No han sido alterados de forma indebida.

### Pérdida de integridad

Puede producirse por:

- Errores.
- Corrupción.
- Ataques.

> Un dato corrupto o manipulado ha perdido su integridad.

---

## 4. ¿Cómo comprobar la integridad?

La unidad presenta varias técnicas:

- Sumas de verificación.
- Funciones hash.
- Firmas digitales.
- Permisos y control de acceso.
- Registros de auditoría.
- Sistemas de archivos con integridad.
- Copias de seguridad.

---

# 5. Sumas de verificación y funciones hash

Una función hash calcula una:

> **huella a partir de un archivo.**

### Idea básica

```text
Archivo
   ↓
Función hash
   ↓
Huella
```

Si el archivo cambia:

```text
Archivo original
      ↓
    SHA-256
      ↓
    Huella A

Archivo modificado
      ↓
    SHA-256
      ↓
    Huella B
```

### Si cambia aunque sea un bit

> La huella cambia.

Comparando las huellas:

> se puede detectar si el archivo ha sido alterado o corrompido.

---

## 6. SHA-256

La unidad utiliza:

> **SHA-256**

como función hash actual para comprobar integridad.

### MD5

El material indica que:

> **MD5 está obsoleto y no debe utilizarse para detectar manipulaciones.**

---

# 7. Firmas digitales

Las firmas digitales garantizan:

- **Integridad**
- **Autenticidad**

Es decir:

```text
¿El dato ha sido alterado?
        +
¿Viene de quien dice?
```

---

# 8. Permisos y control de acceso

Permiten que:

> **solo quien debe pueda modificar los datos.**

Objetivo:

- Evitar alteraciones indebidas.

---

# 9. Registros de auditoría

Los **logs** permiten saber:

> **quién modificó qué.**

Esto proporciona:

> **trazabilidad.**

---

# 10. Sistemas de archivos con integridad

La unidad menciona:

- **ZFS**
- **Btrfs**

Estos sistemas:

> detectan y corrigen la corrupción.

---

# 11. Copias de seguridad e integridad

Las copias también contribuyen a la integridad porque:

> permiten recuperar un dato íntegro si el actual se corrompe.

Por eso se relacionan:

```text
COPIAS
   ↓
Recuperación
   ↓
DATOS ÍNTEGROS
```

---

# 12. Verificación mediante hash

En la práctica:

1. Se calcula la huella de los datos importantes.
2. Se calcula la huella de las copias.
3. Se guarda la huella.
4. Se comprueba periódicamente.
5. Si cambia → investigar posible alteración o corrupción.

---

## Para recordar

```text
INTEGRIDAD
   ↓
Datos correctos
+
Datos completos
+
Sin alteraciones indebidas

HASH
   ↓
Detectar cambios

FIRMA DIGITAL
   ↓
Integridad + autenticidad

PERMISOS
   ↓
Evitar modificaciones indebidas

LOGS
   ↓
Trazabilidad

ZFS / Btrfs
   ↓
Detectar y corregir corrupción
```

---

## Preguntas para clase

- ¿Qué significa integridad de la información?
- ¿Qué puede provocar una pérdida de integridad?
- ¿Qué es una función hash?
- ¿Qué ocurre con la huella si cambia un bit?
- ¿Para qué se utiliza SHA-256?
- ¿Por qué no se debe utilizar MD5 para detectar manipulaciones?
- ¿Qué aportan las firmas digitales?
- ¿Qué información proporcionan los logs?
- ¿Cómo ayudan los permisos a mantener la integridad?
- ¿Qué sistemas de archivos aparecen en la unidad?
- ¿Por qué una copia de seguridad también ayuda a recuperar la integridad?
