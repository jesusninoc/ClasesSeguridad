# Sesión 7 — UD2. Copias de seguridad

## Objetivo de la sesión

- Comprender la finalidad de las copias de seguridad.
- Diseñar una política de copias.
- Diferenciar los tipos de copia.
- Conocer la regla 3-2-1.

---

## 1. ¿Para qué sirven las copias?

Las copias de seguridad permiten:

> **recuperar los datos ante una pérdida.**

### Pueden producirse pérdidas por:

- Fallo de disco.
- Borrado accidental.
- Virus.
- Ransomware.
- Robo.
- Desastre.

> La copia de seguridad es la última línea de defensa para recuperar los datos.

---

## 2. Política de copias de seguridad

Una política debe decidir:

### ¿Qué se copia?

- Los datos importantes.
- No necesariamente todo.

### ¿Cuándo y con qué frecuencia?

Depende de:

> Cuántos datos se puede permitir perder.

### ¿Dónde se guardan?

- En otro soporte.
- Fuera del sitio.

### ¿Cuánto tiempo se conservan?

- Retención.

---

## 3. Cuatro preguntas clave

| Decisión | Pregunta |
|---|---|
| Qué se copia | ¿Qué datos son importantes? |
| Cuándo | ¿Cuántos datos se pueden perder? |
| Dónde | ¿Dónde se guardan las copias? |
| Cuánto | ¿Cuánto tiempo se conservan? |

---

## 4. Copia completa

**Full**

Copia:

> **todos los datos seleccionados.**

### Características

- Completa.
- Lenta.
- Ocupa más espacio.

### Restauración

- Solo hace falta la copia completa.

> **Completa → todo.**

---

## 5. Copia incremental

Copia:

> **lo que ha cambiado desde la última copia, sea del tipo que sea.**

### Características

- Rápida.
- Ocupa poco espacio.

### Restauración

Hace falta:

```text
Copia completa
+
Todas las incrementales en orden
```

> **Incremental → cambios desde la última copia.**

---

## 6. Copia diferencial

Copia:

> **lo que ha cambiado desde la última copia completa.**

### Características

- Velocidad y espacio intermedios.
- Va creciendo cada día.

### Restauración

Hace falta:

```text
Copia completa
+
Última diferencial
```

> **Diferencial → cambios desde la última completa.**

---

## 7. Comparación

| Tipo | Qué copia | Espacio / velocidad | Para restaurar |
|---|---|---|---|
| Completa | Todos los datos | Lenta y ocupa mucho | Solo ella |
| Incremental | Cambios desde la última copia | Rápida y ocupa poco | Completa + todas las incrementales |
| Diferencial | Cambios desde la última completa | Intermedia y crece | Completa + última diferencial |

---

## 8. Combinar tipos de copia

Los tipos pueden combinarse.

### Ejemplo del material

```text
Completa semanal
       +
Incrementales diarias
```

El objetivo es equilibrar:

- Tiempo.
- Espacio.

---

## 9. Regla 3-2-1

### 3 copias

Contando el original.

### 2 soportes distintos

Para evitar que un fallo del tipo de soporte afecte a todas las copias.

### 1 fuera del sitio

Para proteger frente a:

- Robo.
- Incendio.
- Inundación.

```text
3 COPIAS
   ↓
2 SOPORTES DISTINTOS
   ↓
1 FUERA DEL SITIO
```

---

## 10. Automatización

Las copias deben:

- Estar planificadas.
- Automatizarse cuando sea posible.
- Mantenerse seguras.

> No depender únicamente de que alguien recuerde hacerlas.

---

## 11. Restauración

La restauración es:

> **recuperar los datos desde una copia cuando se han perdido.**

### Punto fundamental

La restauración debe:

> **probarse.**

Una copia que no se puede restaurar:

> **no sirve de nada.**

---

## Para recordar

```text
BACKUP
   ↓
RECUPERAR DATOS

POLÍTICA
├── Qué
├── Cuándo
├── Dónde
└── Cuánto tiempo

TIPOS
├── Completa
├── Incremental
└── Diferencial

3-2-1
├── 3 copias
├── 2 soportes
└── 1 fuera del sitio
```

---

## Preguntas para clase

- ¿Por qué son necesarias las copias si tenemos RAID?
- ¿Qué cuatro decisiones debe resolver una política de copias?
- ¿Qué diferencia hay entre incremental y diferencial?
- ¿Qué necesitamos para restaurar una copia incremental?
- ¿Qué necesitamos para restaurar una diferencial?
- ¿Qué significa 3-2-1?
- ¿Por qué una copia debe estar fuera del sitio?
- ¿Por qué hay que probar la restauración?
