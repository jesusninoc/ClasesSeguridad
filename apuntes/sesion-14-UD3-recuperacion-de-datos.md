# Sesión 14 — UD3. Recuperación de datos

## Objetivo de la sesión

- Saber cómo actuar ante una pérdida de datos.
- Diferenciar daño lógico y daño físico.
- Comprender por qué no se debe seguir utilizando el soporte.
- Conocer las principales herramientas de recuperación lógica.
- Entender por qué la recuperación de datos no sustituye a las copias de seguridad.

---

# 1. Cuando ya se ha producido la pérdida

La recuperación de datos comienza:

> **cuando la información ya se ha perdido o el soporte presenta un problema.**

Ejemplos:

- Borrado accidental.
- Disco que deja de reconocerse.
- Memoria USB que solicita ser formateada.

La primera medida es:

> **dejar de escribir en el soporte.**

---

# 2. ¿Por qué hay que dejar de escribir?

Cuando se elimina un archivo:

> el sistema no borra inmediatamente su contenido.

Marca como libre:

> **el espacio que ocupaba.**

Los datos pueden seguir ahí:

> **hasta que otra escritura los sobrescriba.**

Por eso:

> **cada nueva escritura puede reducir las posibilidades de recuperación.**

---

# 3. Primer paso

### Detener el uso del soporte

Si es una unidad externa:

> **desconectarla.**

Si es el disco del sistema:

> **apagar el equipo.**

No:

- Reiniciar.
- Instalar herramientas.
- Escribir nuevos datos.

---

# 4. Segundo paso: determinar el tipo de daño

Hay dos posibilidades principales:

## Daño lógico

Ejemplos:

- Borrado.
- Formateo.
- Tabla de particiones corrupta.

Características:

> **el disco funciona y se puede intentar recuperar la información.**

---

## Daño físico

Indicadores:

- Chasquidos.
- Ruidos repetitivos.
- El disco no gira.
- El sistema no detecta el disco.

En estos casos:

> **cada intento puede empeorar el problema.**

---

# 5. Tercer paso: trabajar sobre una copia

La recuperación debe realizarse:

> **sobre una copia, nunca sobre el original.**

Proceso:

```text
Soporte original
      ↓
Crear imagen
      ↓
Trabajar sobre la imagen
      ↓
Recuperar datos
```

Así:

> el soporte original permanece intacto.

---

# 6. Cuándo detenerse

Ante:

- Daño físico.
- Datos críticos sin copia.

Se debe:

> **parar y acudir a un servicio especializado.**

La recuperación de datos:

- Puede ser cara.
- Puede ser lenta.
- Tiene un resultado incierto.

---

# 7. Recuperación de datos ≠ copia de seguridad

La recuperación de datos:

> **no sustituye a las copias de seguridad.**

Es:

> **un recurso de emergencia.**

Cuando existe una copia:

> **la restauración desde la copia es la vía correcta.**

---

# 8. Orden de actuación ante un daño lógico

```text
Pérdida de datos
      ↓
Dejar de escribir
      ↓
¿Hay copia?
   ↙       ↘
 SÍ        NO
 ↓          ↓
Restaurar   Recuperación lógica
```

Antes de utilizar herramientas de recuperación:

> **preguntar si existe una copia.**

---

# 9. Papelera de reciclaje

Primer lugar que comprobar.

También hay que comprobar:

> **la papelera del servidor de archivos**, si existe.

Es distinta de la papelera del puesto.

---

# 10. Versiones anteriores e instantáneas

Si el volumen tiene activadas las instantáneas:

> **puede conservar versiones anteriores de los archivos.**

Puede ser posible:

> restaurar una versión anterior del archivo o carpeta.

---

# 11. Restauración desde copia de seguridad

Si existe una copia:

> **es la vía correcta y más rápida.**

Además:

- Devuelve los archivos completos.
- Conserva sus nombres.

Solo cuando:

> **no existe una copia**

se debe recurrir a herramientas de recuperación.

---

# 12. TestDisk

**TestDisk**

Se utiliza para:

- Reparar la estructura del disco.
- Recuperar tablas de particiones perdidas.
- Recuperar el sector de arranque.
- Volver a hacer arrancable un disco que ha dejado de serlo.

### Idea clave

> **Problema de estructura del disco.**

---

# 13. PhotoRec

**PhotoRec**

Recupera archivos:

> **por su firma.**

Ignora el sistema de archivos y busca:

> **patrones de bytes asociados a formatos conocidos.**

Puede funcionar incluso:

> **en un soporte formateado.**

### Limitación

Los archivos recuperados aparecen:

- Sin su nombre original.
- Sin su carpeta original.

### Idea clave

> **Recuperar archivos por su contenido/firma.**

---

# 14. GNU ddrescue

**GNU ddrescue**

Se utiliza para:

> **copiar soportes que presentan errores de lectura.**

Funcionamiento:

- Salta sectores dañados.
- Reintenta leerlos posteriormente.
- Permite crear una imagen del soporte que falla.

Después:

> **se trabaja sobre esa imagen.**

---

# 15. Ejemplo de procedimiento de la unidad

```bash
ddrescue -f /dev/sdb /mnt/trabajo/usb.img /mnt/trabajo/usb.log
```

Crear la imagen del soporte.

```bash
photorec /mnt/trabajo/usb.img
```

Recuperar desde la imagen.

```bash
ls -l /mnt/trabajo/recuperado
```

Comprobar los ficheros recuperados.

> El destino de la recuperación debe ser **otro soporte distinto** del que se está recuperando.

---

# 16. Revisar lo recuperado

Después de recuperar los archivos hay que:

- Abrirlos.
- Comprobar que no están truncados.
- Renombrarlos.
- Organizarlos.
- Detectar posibles duplicados.

También hay que:

> **documentar qué se recuperó y qué no.**

---

# 17. Ransomware y recuperación

Los archivos cifrados por ransomware:

> **no se recuperan con estas herramientas.**

El archivo original:

> **ha sido sobrescrito, no simplemente borrado.**

Sin la clave:

> **no hay nada que rastrear mediante estas herramientas.**

La vía real indicada en la unidad es:

> **restaurar desde una copia de seguridad que estuviera desconectada.**

---

# 18. Idea fundamental

```text
PÉRDIDA DE DATOS
       ↓
DEJAR DE ESCRIBIR
       ↓
¿DAÑO LÓGICO O FÍSICO?
       ↓
¿HAY COPIA?
   ↙          ↘
 SÍ           NO
 ↓             ↓
Restaurar    Recuperación
              lógica
```

### Herramientas

```text
TestDisk
   ↓
Estructura / particiones / arranque

PhotoRec
   ↓
Archivos por firma

GNU ddrescue
   ↓
Imagen de un soporte con errores
```

---

# 19. Relación con la UD2

La recuperación de datos conecta directamente con las copias de seguridad:

> **la mejor recuperación es disponer de una copia válida.**

Por eso:

```text
Copias de seguridad
        ↓
Pérdida de datos
        ↓
Restauración
        ↓
Recuperación rápida y fiable
```

---

## Para recordar

- **Dejar de escribir** es la primera medida.
- Diferenciar **daño lógico** y **daño físico**.
- Trabajar sobre una **imagen**, no sobre el original.
- Si existe copia, **restaurarla antes de utilizar herramientas de recuperación**.
- **TestDisk → estructura del disco.**
- **PhotoRec → archivos por firma.**
- **GNU ddrescue → imagen de soportes con errores de lectura.**
- La recuperación de datos **no sustituye a las copias de seguridad**.
- Para ransomware, la vía indicada es **restaurar desde una copia desconectada**.

---

## Preguntas para clase

- ¿Qué es lo primero que debemos hacer ante una pérdida de datos?
- ¿Por qué no debemos seguir utilizando el soporte?
- ¿Qué diferencia hay entre daño lógico y daño físico?
- ¿Qué síntomas pueden indicar daño físico?
- ¿Por qué debemos trabajar sobre una imagen?
- ¿Qué debemos comprobar antes de utilizar una herramienta de recuperación?
- ¿Para qué sirve TestDisk?
- ¿Para qué sirve PhotoRec?
- ¿Para qué sirve GNU ddrescue?
- ¿Por qué los archivos recuperados con PhotoRec pueden aparecer sin su nombre original?
- ¿Por qué la recuperación de datos no sustituye a las copias?
- ¿Cómo se plantea la recuperación de archivos cifrados por ransomware según la unidad?
