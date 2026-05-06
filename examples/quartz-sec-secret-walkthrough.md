# Quartz Sec Secret Core Walkthrough

This note is the quickest way to read the extra review model in `quartz-sec-secret-core`.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 210 | ship |
| stress | claim drift | 227 | ship |
| edge | replay exposure | 222 | ship |
| recovery | policy width | 169 | ship |
| stale | trust boundary | 244 | ship |

Start with `stale` and `recovery`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The useful comparison is `trust boundary` against `policy width`, not the raw score alone.
