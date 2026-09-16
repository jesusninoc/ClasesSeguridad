# Sesión 11 — UD3. Contraseñas y control de acceso

## Objetivo de la sesión

- Comprender la función de las contraseñas.
- Aplicar políticas de contraseñas seguras.
- Comprender el control de acceso.
- Aplicar el principio de mínimo privilegio.
- Conocer la autenticación multifactor.

---

# 1. Contraseñas y control de acceso

Las contraseñas y el control de acceso constituyen:

> **la primera barrera de protección del sistema.**

La finalidad es controlar:

> **quién puede acceder al sistema y con qué permisos.**

---

# 2. Contraseñas seguras

Una contraseña segura debe ser:

- Larga.
- Compleja.
- Única.

### Una contraseña débil

> **Es una puerta abierta.**

---

# 3. Políticas de contraseñas

Una política puede establecer:

- Longitud.
- Complejidad.
- Caducidad.
- Bloqueo.

El objetivo es establecer unas condiciones mínimas para las contraseñas utilizadas en el sistema.

---

# 4. Control de acceso

El control de acceso determina:

> **qué puede hacer cada cuenta dentro del sistema.**

Debe aplicarse:

> **el principio de mínimo privilegio.**

Cada usuario debe disponer:

> **solo de los permisos necesarios para realizar su trabajo.**

---

# 5. Cuenta de administrador

No se debe utilizar:

> **la cuenta de administrador para las tareas habituales del día a día.**

¿Por qué?

Porque limitar los privilegios:

> **reduce el daño si una cuenta se ve comprometida.**

---

# 6. Autenticación multifactor — MFA

**MFA = autenticación multifactor**

Añade:

> **un segundo factor además de la contraseña.**

Puede ser:

- Código.
- Huella.
- Llave.

---

# 7. ¿Por qué es importante MFA?

Aunque un atacante consiga la contraseña:

> **el segundo factor añade una barrera adicional.**

La unidad considera MFA:

> **una de las medidas más eficaces frente a los ataques a cuentas.**

Es especialmente importante en:

- Cuentas de administrador.
- Accesos importantes.

---

# 8. Comparación

| Medida | Función |
|---|---|
| Contraseña segura | Dificulta el acceso no autorizado |
| Política de contraseñas | Establece requisitos de seguridad |
| Mínimo privilegio | Limita los permisos |
| No usar administrador para el día a día | Reduce el impacto de una posible intrusión |
| MFA | Añade un segundo factor de autenticación |

---

# 9. Idea fundamental

La protección de una cuenta no depende únicamente de la contraseña.

```text
Contraseña segura
        +
Mínimo privilegio
        +
MFA
        ↓
Mayor protección de la cuenta
```

---

## Para recordar

```text
CONTROL DE ACCESO
├── Contraseñas seguras
│   ├── Largas
│   ├── Complejas
│   └── Únicas
│
├── Política de contraseñas
│   ├── Longitud
│   ├── Complejidad
│   ├── Caducidad
│   └── Bloqueo
│
├── Mínimo privilegio
└── MFA
```

---

## Preguntas para clase

- ¿Por qué las contraseñas son una primera barrera?
- ¿Qué características debe tener una contraseña segura?
- ¿Qué aspectos puede establecer una política de contraseñas?
- ¿Qué significa mínimo privilegio?
- ¿Por qué no debemos utilizar la cuenta de administrador para el día a día?
- ¿Qué significa MFA?
- ¿Qué puede utilizarse como segundo factor?
- ¿Por qué MFA protege incluso si se roba la contraseña?
