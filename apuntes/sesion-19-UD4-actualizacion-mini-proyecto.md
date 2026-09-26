# Sesión 19 — UD4. Actualización, Zero Trust y mini proyecto

## Objetivo de la sesión

- Conocer la evolución actual de las comunicaciones seguras.
- Comprender TLS 1.3.
- Conocer WireGuard.
- Comprender el modelo Zero Trust Network Access.
- Relacionar certificados, segmentación y WPA3 con la seguridad.
- Integrar los contenidos de la unidad mediante el mini proyecto.

---

# 1. TLS 1.3

El estándar actual indicado por la unidad para la web es:

> **TLS 1.3**

Es la versión moderna utilizada para:

> **cifrar HTTPS.**

La unidad señala que es:

- Más rápido.
- Más seguro.

Las versiones anteriores:

> **ya no deben utilizarse.**

---

# 2. Let's Encrypt

**Let's Encrypt** permite obtener:

> **certificados gratuitos y automáticos.**

Esto ha contribuido a:

> **extender HTTPS a toda la web.**

---

# 3. WireGuard

En las VPN, junto a:

- OpenVPN.
- IPsec.

ha aparecido:

> **WireGuard**

La unidad lo presenta como una VPN:

- Moderna.
- Rápida.
- Sencilla.
- Segura.

---

# 4. VPN tradicional frente a ZTNA

La unidad presenta una evolución:

```text
VPN tradicional
      ↓
Acceso remoto
      ↓
Acceso a la red
```

El problema es que, una vez conectada:

> **la VPN tradicional puede proporcionar acceso a toda la red.**

---

# 5. Zero Trust Network Access — ZTNA

**ZTNA** se basa en:

> **Zero Trust**

En lugar de permitir acceso general a la red:

> **proporciona acceso únicamente a las aplicaciones concretas que necesita el usuario.**

Además:

> **verifica cada acceso.**

---

# 6. Comparación

| VPN tradicional | ZTNA |
|---|---|
| Puede proporcionar acceso a toda la red | Acceso solo a aplicaciones concretas |
| Mayor exposición si una cuenta se compromete | Reduce la exposición |
| Modelo tradicional de acceso remoto | Evolución basada en Zero Trust |
| Protege el túnel | Controla cada acceso |

---

# 7. Certificados digitales

Un certificado digital:

> **acredita la identidad de una web o servidor.**

Contiene:

> **la clave pública.**

Está firmado por:

> **una autoridad de certificación — CA — de confianza.**

El navegador:

> **comprueba el certificado antes de cifrar la comunicación HTTPS.**

---

# 8. Segmentación de red

La segmentación consiste en:

> **dividir la red en segmentos aislados.**

Puede realizarse mediante:

> **VLAN**

Su objetivo es limitar la propagación.

Si una parte de la red resulta comprometida:

> **el atacante no debería poder alcanzar fácilmente el resto.**

---

# 9. Relación con Zero Trust

La segmentación:

> **limita la propagación dentro de la red.**

Está relacionada con:

- Zero Trust.
- Microsegmentación.

---

# 10. Wi-Fi seguro

La unidad vuelve a destacar:

> **WPA3 + contraseña fuerte**

como protección de las comunicaciones inalámbricas.

Una red inalámbrica mal protegida:

> **puede convertirse en una vía de entrada.**

---

# 11. Integración de medidas

```text
TLS 1.3
   +
Certificados
   +
VPN / WireGuard
   +
ZTNA
   +
Segmentación
   +
WPA3
   ↓
Comunicaciones más seguras
```

---

# 12. Mini proyecto guiado

## Aseguramiento de una comunicación con cifrado y VPN

El entregable de la unidad consiste en:

> **asegurar una comunicación mediante cifrado y una VPN.**

---

# 13. Paso 1 — Analizar el tráfico

Utilizar:

> **Wireshark**

Objetivo:

> **detectar si la comunicación viaja cifrada o en claro.**

Debe identificarse:

> **la vulnerabilidad existente.**

---

# 14. Paso 2 — Explicar la criptografía

Explicar:

- Criptografía simétrica.
- Criptografía asimétrica.

Relacionándolas con:

> **la protección de la comunicación.**

---

# 15. Paso 3 — Asegurar la comunicación

Configurar:

> **HTTPS con certificado.**

Y montar:

> **una VPN para el acceso remoto seguro.**

---

# 16. Paso 4 — Instalar y comprobar

Instalar:

> **el software específico, como el cliente VPN.**

Después:

> **comprobar con Wireshark que el tráfico va cifrado.**

Finalmente:

> **documentar el procedimiento.**

---

# 17. Entregable

El entregable es:

> **Aseguramiento de una comunicación mediante cifrado y una VPN.**

Debe incluir:

1. Análisis del tráfico.
2. Detección de tráfico cifrado o en claro.
3. Explicación de la criptografía.
4. Configuración de HTTPS.
5. Configuración de la VPN.
6. Instalación del software necesario.
7. Comprobación con Wireshark.
8. Documentación del resultado.

---

# 18. Secuencia completa

```text
1. Analizar
      ↓
2. Detectar vulnerabilidad
      ↓
3. Explicar criptografía
      ↓
4. Configurar HTTPS
      ↓
5. Montar VPN
      ↓
6. Instalar software
      ↓
7. Comprobar con Wireshark
      ↓
8. Documentar
```

---

# 19. Preguntas de repaso de la unidad

- ¿Qué amenazas existen en las comunicaciones?
- ¿Qué diferencia hay entre sniffing y Man-in-the-Middle?
- ¿Qué es spoofing?
- ¿Qué principios de seguridad puede afectar un MitM?
- ¿Para qué sirve Wireshark?
- ¿Qué diferencia hay entre criptografía simétrica y asimétrica?
- ¿Qué es HTTPS?
- ¿Qué función tiene TLS?
- ¿Qué es una VPN?
- ¿Qué diferencia hay entre HTTPS y VPN?
- ¿Qué servicios innecesarios debemos desactivar?
- ¿Qué diferencia hay entre 127.0.0.1 y 0.0.0.0?
- ¿Cómo se reduce el correo no deseado?
- ¿Qué protocolo Wi-Fi no debe utilizarse?
- ¿Cuál es el estándar Wi-Fi actual indicado?
- ¿Qué es WPS y por qué se recomienda desactivarlo?
- ¿Qué es TLS 1.3?
- ¿Qué es WireGuard?
- ¿Qué es ZTNA?
- ¿Qué es la segmentación de red?
- ¿Para qué sirve un certificado digital?

---

# Para recordar

```text
AMENAZAS
├── Sniffing
├── Man-in-the-Middle
├── Spoofing
├── Modificación
└── DoS

PROTECCIÓN
├── Criptografía
│   ├── Simétrica
│   └── Asimétrica
├── HTTPS
├── VPN
├── TLS 1.3
├── WireGuard
├── ZTNA
├── Certificados
├── Segmentación
└── WPA3
```

> **La unidad culmina con la comprobación práctica de que una comunicación que antes viajaba en claro puede quedar protegida mediante cifrado, HTTPS y VPN.**
