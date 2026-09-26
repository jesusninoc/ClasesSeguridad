# Sesión 17 — UD4. Criptografía, HTTPS y VPN

## Objetivo de la sesión

- Comprender qué es el cifrado.
- Diferenciar criptografía simétrica y asimétrica.
- Conocer sus ventajas e inconvenientes.
- Comprender HTTPS.
- Comprender el funcionamiento de una VPN.
- Relacionar la criptografía con las comunicaciones seguras.

---

# 1. ¿Qué es la criptografía?

La criptografía protege la información:

> **transformándola para que solo quien tenga la clave pueda leerla.**

El proceso básico es:

```text
Texto claro
    ↓
Algoritmo + clave
    ↓
Texto cifrado
```

Para recuperar la información:

```text
Texto cifrado
    ↓
Clave correcta
    ↓
Texto claro
```

---

# 2. ¿Por qué cifrar?

Si un atacante intercepta los datos cifrados:

> **no puede entenderlos sin la clave.**

Por tanto, el cifrado protege:

> **la información durante su transmisión.**

---

# 3. Criptografía simétrica

Utiliza:

> **una misma clave para cifrar y descifrar.**

Las dos partes deben:

> **compartir la misma clave secreta.**

### Ventaja

> **Es rápida.**

Es adecuada para:

> **grandes volúmenes de datos.**

### Inconveniente

Hay que:

> **compartir la clave de forma segura.**

### Algoritmo mencionado

> **AES**

---

# 4. Criptografía asimétrica

Utiliza:

> **dos claves relacionadas.**

### Clave pública

> Se puede compartir.

### Clave privada

> Debe mantenerse secreta.

Lo que se cifra con una:

> **se descifra con la otra.**

---

# 5. Ventaja de la criptografía asimétrica

Resuelve el problema de:

> **compartir la clave secreta.**

Por ejemplo:

```text
Destinatario
   ↓
Clave pública
   ↓
Cifrar mensaje
   ↓
Enviar
   ↓
Clave privada del destinatario
   ↓
Descifrar
```

También permite:

> **firmas digitales.**

Las firmas digitales permiten trabajar con:

- Autenticidad.
- Integridad.

---

# 6. Inconveniente

La criptografía asimétrica es:

> **más lenta que la simétrica.**

### Algoritmos mencionados

- RSA.
- ECC.

---

# 7. Comparación

| Característica | Simétrica | Asimétrica |
|---|---|---|
| Claves | Una | Dos |
| Velocidad | Rápida | Más lenta |
| Intercambio de clave | Problema principal | Lo facilita |
| Uso destacado | Grandes volúmenes | Intercambio y firmas |
| Algoritmos | AES | RSA, ECC |

---

# 8. En la práctica se combinan

Los sistemas reales, como HTTPS:

> **combinan criptografía asimétrica y simétrica.**

La asimétrica se utiliza para:

> **intercambiar de forma segura una clave.**

La simétrica se utiliza después para:

> **cifrar rápidamente la comunicación.**

---

# 9. HTTPS

**HTTPS = HTTP Seguro**

Es:

> **HTTP cifrado con TLS.**

Cuando navegamos mediante:

> **https://**

la comunicación con la web está cifrada.

---

# 10. El candado del navegador

El candado indica que:

> **la comunicación utiliza HTTPS.**

HTTPS protege información como:

- Contraseñas.
- Datos de pago.
- Información enviada y recibida.

Además utiliza:

> **certificados digitales**

para comprobar que la web es auténtica.

---

# 11. Certificados digitales

Un certificado:

> **acredita la identidad de una web o servidor.**

Contiene:

> **su clave pública.**

Está firmado por:

> **una autoridad de certificación — CA — de confianza.**

El navegador comprueba el certificado:

> **antes de establecer la comunicación segura.**

---

# 12. VPN

**VPN = Red Privada Virtual**

Crea:

> **un túnel cifrado a través de una red pública.**

Por ejemplo:

```text
Equipo remoto
     ↓
 Internet
     ↓
 ╔══════════════╗
 ║ TÚNEL VPN    ║
 ╚══════════════╝
     ↓
Red de empresa
```

---

# 13. ¿Para qué sirve una VPN?

La unidad menciona:

- Teletrabajo.
- Protección en Wi-Fi públicas.
- Conexión entre sedes remotas.

Todo lo que pasa por la VPN:

> **viaja cifrado por el túnel.**

---

# 14. Otros protocolos seguros

La unidad también menciona:

- **SSH** → administración remota segura.
- **SFTP/FTPS** → transferencia segura de archivos.
- Correo cifrado.
- **WPA3** → Wi-Fi seguro.

---

# 15. HTTPS frente a VPN

| Tecnología | Principal finalidad |
|---|---|
| HTTPS | Proteger la comunicación con una web |
| VPN | Crear un túnel cifrado para la comunicación de red |

---

# 16. Idea fundamental

```text
CRIPTOGRAFÍA
      ↓
Protege la información
      ↓
HTTPS → Web
VPN   → Conexión segura
```

---

## Preguntas para clase

- ¿Qué es el texto claro?
- ¿Qué es el texto cifrado?
- ¿Qué diferencia hay entre cifrado simétrico y asimétrico?
- ¿Qué ventaja tiene AES?
- ¿Qué problema presenta la criptografía simétrica?
- ¿Qué son la clave pública y la clave privada?
- ¿Para qué sirven las firmas digitales?
- ¿Por qué la criptografía asimétrica es más lenta?
- ¿Qué es HTTPS?
- ¿Qué función tiene un certificado digital?
- ¿Qué es una VPN?
- ¿Qué diferencia hay entre HTTPS y una VPN?
