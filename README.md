# Gri Registrar Module for WISECP

This module connects WISECP to your Gri reseller account, so you can sell domains and manage them from your own panel.

## Which version should I use?

| Your WISECP version | Module version |
|---|---|
| WISECP v5 | 2.x (latest) |
| Older than v5 | 1.x |

Both are available on the [Releases](https://github.com/Grilabs/gri-wisecp-registrar/releases) page. Download the zip attached to the release (`gri-wisecp-registrar-vX.Y.Z.zip`). It already contains the `Gri` folder WISECP expects. The "Source code" archives GitHub adds automatically won't install as they are.

## Installation

1. Extract the zip into `coremio/modules/Registrars/`. You should end up with `coremio/modules/Registrars/Gri/`.
2. In the WISECP admin panel, open **Products → Domain Name Registrars → Gri**.
3. Enter your Gri B2B API username, password, client ID and client secret, then save.

To try things out first, turn on **Test Mode** and use your sandbox credentials.

## What it does

- Domain registration, transfer and renewal
- Contact and WHOIS details, WHOIS privacy
- Nameservers and child nameservers
- Transfer lock and auth codes
- TLD price import from Gri
- DNSSEC and premium domain pricing (2.x only)

Version 2.x needs PHP 8.0 or later.

## Troubleshooting

Turn on **Debug Mode** in the module settings and repeat the action. Requests and responses are written to the log with passwords and tokens masked. Turn it off again when you are done.

If you're stuck, open an issue here or get in touch with Gri support.
