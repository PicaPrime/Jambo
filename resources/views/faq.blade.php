@extends('layouts.withoutNav')
@section('title', 'FAQ - HustleBTC | Bitcoin Casino Help & Support Center')
@section('content')
<div class="faq-container">
  <!-- Header Section -->
  <div class="faq-header">
    <h1>Frequently Asked Questions</h1>
    <p>
      Find comprehensive answers to common questions about HustleBTC Bitcoin
      casino, cryptocurrency deposits, instant withdrawals, provably fair
      gameplay, and crypto gambling security.
    </p>
    <!-- Back to Casino Button -->
    <div style="margin-top: 20px">
      <a href="{{ route('home') }}" class="contact-btn">
        <span style="margin-right: 8px">🏠</span>
        Back to Casino
      </a>
    </div>
  </div>
  <!-- FAQ Accordion -->
  <div class="faq-accordion" id="faqAccordion">
    <!-- Gameplay Questions -->
    <div class="faq-item gameplay">
      <input type="checkbox" id="faq1" class="faq-toggle" />
      <label for="faq1" class="faq-question">
        <h3>What is HustleBTC Bitcoin Casino?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          HustleBTC is a premier Bitcoin casino featuring a thrilling social
          cryptocurrency gambling experience. Our provably fair Bitcoin
          crash game offers real-time, exciting gameplay where you can
          securely play for fun or win substantial Bitcoin rewards. Each
          round of our crypto multiplier game gives you the opportunity to
          place Bitcoin bets before the round starts. Once the Bitcoin
          gambling round begins, a lucky multiplier starts at 1x and climbs
          higher and higher. At any moment, you can click "Cashout" to lock
          in the current multiplier and win your multiplied Bitcoin bet. The
          longer you stay in the cryptocurrency game before cashing out, the
          higher the Bitcoin multiplier gets. But beware! If you don't cash
          out before the crash, you lose your Bitcoin bet in this exciting
          crypto gambling experience.
        </div>
      </div>
    </div>
    <div class="faq-item gameplay">
      <input type="checkbox" id="faq2" class="faq-toggle" />
      <label for="faq2" class="faq-question">
        <h3>How do I play the Bitcoin crash game at HustleBTC?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          To start playing our Bitcoin casino games, you need a positive
          balance by depositing Bitcoin to your crypto gambling account or
          receiving Bitcoin tips from the HustleBTC community. Watch the
          cryptocurrency multiplier increase from 1x upwards in our provably
          fair Bitcoin crash game! You can cash out your Bitcoin bet before
          your set cash-out limit by pressing the 'Cash Out' button. Get
          your Bitcoin bet multiplied by the current multiplier in our
          crypto casino. Be careful because our Bitcoin gambling game can
          crash at any time, and you'll lose your cryptocurrency bet! This
          makes HustleBTC one of the most exciting Bitcoin casinos for
          crypto gambling enthusiasts.
        </div>
      </div>
    </div>
    <div class="faq-item gameplay">
      <input type="checkbox" id="faq3" class="faq-toggle" />
      <label for="faq3" class="faq-question">
        <h3>What is the Bitcoin casino bonus system?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          The HustleBTC Bitcoin casino bonus is a special cryptocurrency
          reward awarded to the last players to cash out before the crash
          game busts. Getting the Bitcoin bonus is critical to skillful
          crypto gambling at HustleBTC and can significantly increase your
          Bitcoin winnings. This provably fair bonus system makes our
          Bitcoin casino stand out among other cryptocurrency gambling
          platforms.
        </div>
      </div>
    </div>
    <div class="faq-item gameplay">
      <input type="checkbox" id="faq4" class="faq-toggle" />
      <label for="faq4" class="faq-question">
        <h3>How high can the Bitcoin multiplier go in the crash game?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          There's virtually no limit to our Bitcoin casino multiplier! The
          technical limit for our cryptocurrency crash game is
          4,458,563,631,096,791.04x, but it's extremely unlikely to ever be
          reached in our Bitcoin gambling platform. However, if during a
          crypto gambling round the HustleBTC bankroll faces a potential
          loss of 1.5% or greater, our Bitcoin casino server will
          automatically cash out all players, forcing them to enjoy an early
          cryptocurrency win. This ensures fair play in our provably fair
          Bitcoin casino.
        </div>
      </div>
    </div>
    <div class="faq-item gameplay">
      <input type="checkbox" id="faq5" class="faq-toggle" />
      <label for="faq5" class="faq-question">
        <h3>What is the maximum Bitcoin bet limit at HustleBTC casino?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          Our Bitcoin casino currently has a maximum bet limit of 1,000,000
          bits = 1 BTC per round. This cryptocurrency betting limit ensures
          fair gameplay and protects both Bitcoin casino players and the
          house bankroll. This makes HustleBTC accessible for both small and
          high-stakes crypto gambling enthusiasts.
        </div>
      </div>
    </div>
    <!-- Deposits Questions -->
    <div class="faq-item deposits">
      <input type="checkbox" id="faq6" class="faq-toggle" />
      <label for="faq6" class="faq-question">
        <h3>What are Bitcoin bits and how do they work in crypto gambling?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          Bitcoin bits are not a separate cryptocurrency but simply another
          unit of Bitcoin, similar to how cents relate to dollars in
          traditional currency. In our Bitcoin casino, 1 bitcoin always
          equals 1,000,000 bits. This means 1 bit equals 0.00000100 bitcoin
          for crypto gambling purposes. Since Bitcoin's price constantly
          fluctuates, the fiat value of bits changes accordingly. You can
          use our HustleBTC chat bot to conveniently check current bit
          values in other currencies. For example, try typing
          <code>!convert 1000 bits USD</code> in our Bitcoin casino chat to
          find out the current cryptocurrency value for your gambling
          session.
        </div>
      </div>
    </div>
    <div class="faq-item deposits">
      <input type="checkbox" id="faq7" class="faq-toggle" />
      <label for="faq7" class="faq-question">
        <h3>How do I deposit Bitcoin to HustleBTC casino?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          To fund your Bitcoin casino account, transfer Bitcoin to the
          unique deposit address on your HustleBTC account page. If you
          don't own Bitcoin yet, we recommend Coinbase for US-based crypto
          gambling enthusiasts (though registration can be lengthy).
          LocalBitcoins.com is another excellent option for peer-to-peer
          Bitcoin trading for casino deposits. You can also search for
          Bitcoin ATMs near you for instant cryptocurrency purchases.
          Remember, you can deposit Bitcoin directly to your HustleBTC
          casino address for immediate crypto gambling!
        </div>
      </div>
    </div>
    <div class="faq-item deposits">
      <input type="checkbox" id="faq8" class="faq-toggle" />
      <label for="faq8" class="faq-question">
        <h3>How long do Bitcoin deposits take at HustleBTC casino?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          Our Bitcoin casino credits pending deposit transactions to your
          crypto gambling account after one blockchain confirmation (when
          the transaction appears in one block). The speed of Bitcoin
          confirmations for casino deposits depends on your transaction fee
          and current Bitcoin network congestion. Higher cryptocurrency
          transaction fees typically result in faster confirmations for your
          HustleBTC gambling account. This ensures quick access to our
          Bitcoin casino games.
        </div>
      </div>
    </div>
    <!-- Withdrawals Questions -->
    <div class="faq-item withdrawals">
      <input type="checkbox" id="faq9" class="faq-toggle" />
      <label for="faq9" class="faq-question">
        <h3>How do I withdraw Bitcoin from HustleBTC casino?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          HustleBTC processes Bitcoin casino withdrawals immediately and
          broadcasts them on the blockchain as quickly as possible. However,
          we cannot guarantee instant blockchain confirmation for
          cryptocurrency withdrawals. The speed of Bitcoin withdrawal
          confirmations depends on network transaction fees and current
          blockchain congestion. Our Bitcoin casino prioritizes fast, secure
          crypto withdrawals for all gambling winnings.
        </div>
      </div>
    </div>
    <!-- Account Questions -->
    <div class="faq-item account">
      <input type="checkbox" id="faq10" class="faq-toggle" />
      <label for="faq10" class="faq-question">
        <h3>What are the HustleBTC Bitcoin casino chat rules?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          <strong>1.</strong> Don't ask for Bitcoin or cryptocurrency
          anywhere, including private messages and the spam channel.
          Requesting crypto loans, investments, or implying other Bitcoin
          casino players should give you money is prohibited.<br /><br />
          <strong>2.</strong> Don't advertise in our Bitcoin casino chat.
          This includes trade offers, job postings, referral links, and
          affiliate links. Advertising in the spam channel is tolerated for
          crypto gambling discussions as long as you don't automate your
          posts.<br /><br />
          <strong>3.</strong> Don't use multiple HustleBTC accounts to chat
          simultaneously or evade mutes. Using another Bitcoin casino
          account to chat while muted may result in both accounts being
          restricted.<br /><br />
          <strong>4.</strong> Don't share Bitcoin casino accounts with other
          players, even temporarily. If they violate chat rules and get
          muted or banned, your HustleBTC accounts might face similar
          restrictions.
        </div>
      </div>
    </div>
    <div class="faq-item account">
      <input type="checkbox" id="faq11" class="faq-toggle" />
      <label for="faq11" class="faq-question">
        <h3>What are the Bitcoin casino faucet rules at HustleBTC?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          <strong>1.</strong> Don't abuse the Bitcoin casino faucet - your
          HustleBTC account might get permanently banned from crypto
          gambling.<br /><br />
          <strong>2.</strong> Only one Bitcoin casino account is allowed per
          person. Creating multiple HustleBTC accounts will result in a
          permanent ban from our cryptocurrency gambling platform.<br /><br />
          <strong>3.</strong> If family members or friends join HustleBTC
          Bitcoin casino on the same IP connection, please notify our crypto
          gambling support staff beforehand.<br /><br />
          <strong>4.</strong> Avoid using VPNs or proxies when accessing our
          Bitcoin casino, as this can trigger our multiple account detection
          system and result in a crypto gambling ban.<br /><br />
          <strong>5.</strong> Don't use bots to claim Bitcoin casino faucet
          rewards - automated faucet claiming will result in account
          termination from our cryptocurrency gambling platform.<br /><br />
          Remember that our Bitcoin casino faucet is sensitive and should be
          used responsibly to test our crypto gambling games.
        </div>
      </div>
    </div>
    <div class="faq-item account">
      <input type="checkbox" id="faq12" class="faq-toggle" />
      <label for="faq12" class="faq-question">
        <h3>I lost my 2FA device for my Bitcoin casino account - what should I do?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          Contact HustleBTC Bitcoin casino support immediately to initiate
          the 2FA removal process for your crypto gambling account. We'll
          need to verify your identity through alternative methods to ensure
          your Bitcoin casino account security. Contact our cryptocurrency
          gambling support team with your account details, and we'll guide
          you through the secure recovery process to restore access to your
          HustleBTC account.
        </div>
      </div>
    </div>
    <div class="faq-item account">
      <input type="checkbox" id="faq13" class="faq-toggle" />
      <label for="faq13" class="faq-question">
        <h3>I found a bug in the Bitcoin casino - how do I report it?</h3>
        <span class="faq-icon">+</span>
      </label>
      <div class="faq-answer">
        <div class="faq-answer-content">
          If you discover a bug in our Bitcoin casino, please describe it
          using our HustleBTC support form. Even though we thoroughly test
          our cryptocurrency gambling software, minor issues sometimes go
          unnoticed in our Bitcoin casino platform. Your help improving our
          crypto gambling experience is greatly appreciated! While HustleBTC
          doesn't have a formal bug bounty program, we're always happy to
          pay Bitcoin bounties for responsible disclosure of significant
          vulnerabilities in our cryptocurrency casino. Please
          <a href="{{ route('support') }}" rel="noopener">contact our Bitcoin casino support</a>
          securely to discuss details if you believe you found a critical
          vulnerability in our crypto gambling platform.
        </div>
      </div>
    </div>
  </div>
  <!-- Contact Section -->
  <div class="contact-section">
    <h2>Still Have Bitcoin Casino Questions?</h2>
    <p>
      Can't find what you're looking for about our cryptocurrency gambling
      platform? Our HustleBTC Bitcoin casino support team is here to help
      you 24/7 with all your crypto gambling questions.
    </p>
    <a href="{{ route('support') }}" class="contact-btn" rel="noopener">
      Contact Bitcoin Casino Support
    </a>
  </div>
</div>
<a href="#top" class="back-to-top" aria-label="Back to top">↑</a>
@endsection
