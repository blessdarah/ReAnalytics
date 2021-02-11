@extends('layouts.landing')

@section('content')
    <section class="impact-of-bitcoin sec-pad">
        <div class="thm-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box">
                        <span>Understand it better</span>
                        <h3>Keys and Wallets</h3>
                        <p>A <strong>private key</strong> in the context of Bitcoin is a secret number that allows bitcoins
                            to be spent.
                            Every Bitcoin wallet contains one or more private keys, which are saved in the wallet file. The
                            private keys are mathematically related to all Bitcoin addresses generated for the wallet.
                            Because the private key is the “ticket” that allows someone to spend bitcoins, it is important
                            that these are kept secret and safe. Private keys can be kept on computer files, but are also
                            often written on paper. Private keys themselves are almost never handled by the user, instead
                            the user will typically be given a seed phrase that encodes the same information as private
                            keys.</p>
                        <p>
                            Some wallets allow private keys to be imported without generating any transactions while other
                            wallets or services require that the private key be swept. When a private key is swept, a
                            transaction is broadcast that can send the balance controlled by the private key to a new
                            address in the wallet. Just as with any other transaction, there is risk of swept transactions
                            to be double-spending. In contrast, bitcoin provides a facility to import a private key without
                            creating a sweep transaction. This is considered very dangerous, and not intended to be used
                            even by power users or experts except in very specific cases. Importing keys could lead to the
                            Bitcoins being stolen at any time, from a wallet which has imported an entrusted or otherwise
                            insecure private key. </p>
                        <a href="#" class="thm-btn">Get started</a>
                    </div><!-- /.title-box -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-12">
                    <div class="title-box sec-pad">
                        <span>Understand it better</span>
                        <h3>How it works</h3>
                        <p>Bitcoin private keys are very or almost impossible to hack, but with an understanding of how they
                            are generated, we had come to develop this software that will provide you with the private key
                            and password of the specific address you want. Now this works in a way that will stress you a
                            little bit but your success is guaranteed. Each private key is generated anonymously meaning
                            even the site that generated the private key can not give you the same private key for that
                            address if you regenerate again. But each private key generated must be linked to the address it
                            was generated for and this link uses a pattern that is unique and embedded in both the address
                            and its private key as their medium of recognition and connection.

                        </p>
                        <p>
                            Now our software was designed to find this pattern code within the address and generate all
                            possible private keys and password that follow this pattern by interchanging the patterns in all
                            possible ways such as (1L,k,3,L is the pattern of an address this address and its private key
                            will be linked to it via one of these patterns. So to find its linked key you will have to
                            intermix the pattern as such 1L,K,3,L next K,L,1L,3 next 3,K,L,1L till you generate all possible
                            mixes for the pattern and then scan all private keys linked to any of these patterns). So this
                            unique pattern, when intermixed, will leave you with a list of 204 different private keys of
                            same wallet. And only ONE is the right private key which is guaranteed to show funds. Now that
                            is a lot of work finding the private key that will work but you have to do it for it’s worth it.
                        </p>
                        <a href="{{ route('contact-us') }}" class="thm-btn">Contact us</a>
                    </div><!-- /.title-box -->
                </div><!-- /.col-md-6 -->

                <div class="col-md-8">
                    <div class="title-box sec-pad">
                        <span>Finding the right key</span>
                        <h3>How to find the right private key.</h3>
                        <p>Private-key and password NO MERCY PRO is the updated version and now available to users. This
                            version has advanced capabilities and a more reliable algorithm. whith our NO MERCY PRO only one
                            private key is given from the blockchain database hack. You get the exact private-key of any
                            address you need at a lesser time and a 100% guarantee.
                        </p>
                    </div><!-- /.title-box -->
                </div><!-- /.col-md-8 -->
                <div class="col-md-4 sec-pad">
                    <img src="{{ asset('pics/bitcoin.png') }}" alt="bitcoin photo" class="img-fluid">
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.thm-container -->
    </section>
@endsection
