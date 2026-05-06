# Review Journal

The review surface for `quartz-sec-secret-core` is deliberately narrow: one fixture, one scoring rule, and one local check.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 210, lane `ship`
- `stress`: `claim drift`, score 227, lane `ship`
- `edge`: `replay exposure`, score 222, lane `ship`
- `recovery`: `policy width`, score 169, lane `ship`
- `stale`: `trust boundary`, score 244, lane `ship`

## Note

This file is intentionally plain so the fixture remains the source of truth.
