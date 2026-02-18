# 🛡️ SoftKnight Logger

> Uma biblioteca PHP leve para abstração de logs, construída sobre o motor do **Monolog**.  
> Desenvolvida para oferecer uma interface simples e rápida de registro de eventos em aplicações PHP.

---

## 📦 Instalação

A maneira recomendada de instalar esta biblioteca é através do [Composer](https://getcomposer.org/):

```bash
composer require softknight/logger
```

---

## 🛠️ Como usar

Certifique-se de que o `vendor/autoload.php` do seu projeto foi incluído. Para usar a biblioteca, basta importar a função do namespace:

```php
use function SoftKnight\Logger\logger;

// 1. Log de informação (padrão) enviado para o caminho default
logger("Conexão estabelecida com sucesso.");

// 2. Log com níveis específicos
logger("Tentativa de login inválida", "warning");
logger("Falha crítica no sistema de arquivos", "emergency");

// 3. Log com caminho customizado (Caminho Dinâmico)
logger("Ação específica", "info", __DIR__ . '/logs/meu_arquivo_personalizado.log');
```

---

## 📋 Níveis de Log Suportados

A função `logger()` aceita os seguintes modos, seguindo o padrão **RFC 5424**:

| Nível       | Descrição                            |
|-------------|--------------------------------------|
| `debug`     | Informações detalhadas de depuração  |
| `info`      | Eventos informativos gerais          |
| `notice`    | Eventos normais, mas significativos  |
| `warning`   | Situações inesperadas, não críticas  |
| `error`     | Erros de execução                    |
| `critical`  | Condições críticas                   |
| `alert`     | Ação imediata necessária             |
| `emergency` | Sistema inutilizável                 |

---

## 📂 Configuração e Segurança

Por padrão, a biblioteca tenta gravar os registros em um diretório relativo à instalação. No entanto, o uso do terceiro parâmetro `$path` é **altamente recomendado**.

> **⚠️ Dica de Segurança:** Em ambientes de produção, configure o caminho do log para uma pasta **fora da raiz pública** do seu servidor (ex: `/var/log/softknight/app.log`). Isso impede que arquivos de log sejam lidos diretamente pelo navegador.