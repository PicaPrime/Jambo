@extends('layouts.leaderboard')
@section('title', 'Leaderboard - HustleBTC | Top Bitcoin Casino Players & Winners')
@push('head')
<link rel="stylesheet" href="{{ asset('leaderboard-styles.css') }}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
@endpush
@section('content')
<!-- Navigation -->
<nav class="navbar">
  <div class="nav-container">
    <div class="nav-brand">
      <div class="brand-logo">
        <span class="bitcoin-symbol">₿</span>
      </div>
      <span class="brand-text">HustleBTC</span>
    </div>
    <div class="nav-menu">
      <a href="{{ route('home') }}" class="nav-link">Home</a>
      <a href="{{ route('investment') }}" class="nav-link">Bankroll</a>
      <a href="/stats" class="nav-link">Stats</a>
      <a href="{{ route('leaderboard') }}" class="nav-link active">Leaderboard</a>
      <a href="{{ route('faq') }}" class="nav-link">Help</a>
    </div>
    <div class="nav-actions">
      <a href="{{ route('login') }}" class="btn-secondary">Login</a>
      <a href="{{ route('register') }}" class="btn-primary">Sign Up</a>
    </div>
  </div>
</nav>
<!-- Background Effects -->
<div class="page-background">
  <div class="floating-elements">
    <div class="floating-bitcoin">₿</div>
    <div class="floating-bitcoin">₿</div>
    <div class="floating-bitcoin">₿</div>
    <div class="floating-bitcoin">₿</div>
    <div class="floating-bitcoin">₿</div>
    <div class="floating-bitcoin">₿</div>
  </div>
  <div class="gradient-orbs">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
  </div>
</div>
<!-- Main Content -->
<main class="leaderboard-main">
  <!-- Hero Section -->
  <section class="leaderboard-hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-badge">
          <span class="badge-icon"><i class="fas fa-trophy"></i></span>
          <span>Live Rankings</span>
        </div>
        <h1 class="hero-title">
          <span class="gradient-text">Biggest Hustlers</span>
          Leaderboard
        </h1>
        <p class="hero-description">
          See who's dominating the tables and climbing to the top. Updated every 5 minutes with real-time profits and rankings.
        </p>
      </div>
    </div>
  </section>
  <!-- Podium Section -->
  <section class="podium-section">
    <div class="container">
      <div class="podium-container">
        <!-- Second Place -->
        <div class="podium-item podium-second">
          <div class="podium-rank">
            <div class="rank-number">2</div>
            <div class="rank-medal silver">
              <i class="fas fa-medal"></i>
            </div>
          </div>
          <div class="podium-player">
            <div class="player-avatar">
              <img src="https://hustlebtc.com/img/hustle56.png" alt="BitcoinBeast" />
            </div>
            <div class="player-info">
              <h3 class="player-name">BitcoinBeast</h3>
              <div class="player-level">VIP Gold</div>
            </div>
          </div>
          <div class="podium-stats">
            <div class="profit-amount">0.32156700 ₿</div>
            <div class="games-played">2,847 games</div>
          </div>
          <div class="podium-base podium-base-second"></div>
        </div>
        <!-- First Place -->
        <div class="podium-item podium-first">
          <div class="podium-crown">
            <i class="fas fa-crown"></i>
          </div>
          <div class="podium-rank">
            <div class="rank-number">1</div>
            <div class="rank-medal gold">
              <i class="fas fa-medal"></i>
            </div>
          </div>
          <div class="podium-player">
            <div class="player-avatar champion">
              <img src="https://hustlebtc.com/img/hustle57.png" alt="Mike" />
              <div class="avatar-glow"></div>
            </div>
            <div class="player-info">
              <h3 class="player-name">Mike</h3>
              <div class="player-level">VIP Diamond</div>
            </div>
          </div>
          <div class="podium-stats">
            <div class="profit-amount champion-profit">0.71060880 ₿</div>
            <div class="games-played">4,521 games</div>
          </div>
          <div class="podium-base podium-base-first"></div>
        </div>
        <!-- Third Place -->
        <div class="podium-item podium-third">
          <div class="podium-rank">
            <div class="rank-number">3</div>
            <div class="rank-medal bronze">
              <i class="fas fa-medal"></i>
            </div>
          </div>
          <div class="podium-player">
            <div class="player-avatar">
              <img src="https://hustlebtc.com/img/hustle56.png" alt="HustleHero" />
            </div>
            <div class="player-info">
              <h3 class="player-name">HustleHero</h3>
              <div class="player-level">VIP Silver</div>
            </div>
          </div>
          <div class="podium-stats">
            <div class="profit-amount">0.28923400 ₿</div>
            <div class="games-played">1,923 games</div>
          </div>
          <div class="podium-base podium-base-third"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- Full Leaderboard Table -->
  <section class="leaderboard-table-section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Complete Rankings</h2>
        <div class="filter-tabs">
          <button class="filter-tab active">All Time</button>
          <button class="filter-tab">This Month</button>
          <button class="filter-tab">This Week</button>
          <button class="filter-tab">Today</button>
        </div>
      </div>
      <div class="leaderboard-table">
        <div class="table-header">
          <div class="header-cell rank-header">Rank</div>
          <div class="header-cell player-header">Player</div>
          <div class="header-cell wagered-header">Total Wagered</div>
          <div class="header-cell profit-header">Net Profit</div>
          <div class="header-cell games-header">Games Played</div>
        </div>
        <div class="table-body">
          <!-- Rank 4 -->
          <div class="table-row">
            <div class="table-cell rank-cell">
              <div class="rank-badge rank-4">4</div>
            </div>
            <div class="table-cell player-cell">
              <div class="player-avatar-small">
                <img src="https://hustlebtc.com/img/hustle58.png" alt="SatoshiSlayer" />
              </div>
              <div class="player-details">
                <div class="player-name">SatoshiSlayer</div>
                <div class="player-level">VIP Bronze</div>
              </div>
            </div>
            <div class="table-cell wagered-cell">
              <div class="amount">2.45678900 ₿</div>
            </div>
            <div class="table-cell profit-cell">
              <div class="profit-amount positive">0.19784500 ₿</div>
            </div>
            <div class="table-cell games-cell">
              <div class="games-count">1,456</div>
            </div>
          </div>
          <!-- Rank 5 -->
          <div class="table-row">
            <div class="table-cell rank-cell">
              <div class="rank-badge rank-5">5</div>
            </div>
            <div class="table-cell player-cell">
              <div class="player-avatar-small">
                <img src="https://hustlebtc.com/img/hustle58.png" alt="CrashMaster" />
              </div>
              <div class="player-details">
                <div class="player-name">CrashMaster</div>
                <div class="player-level">Regular</div>
              </div>
            </div>
            <div class="table-cell wagered-cell">
              <div class="amount">1.89234500 ₿</div>
            </div>
            <div class="table-cell profit-cell">
              <div class="profit-amount positive">0.15342100 ₿</div>
            </div>
            <div class="table-cell games-cell">
              <div class="games-count">987</div>
            </div>
          </div>
          <!-- Rank 6 -->
          <div class="table-row">
            <div class="table-cell rank-cell">
              <div class="rank-badge rank-6">6</div>
            </div>
            <div class="table-cell player-cell">
              <div class="player-avatar-small">
                <img src="https://hustlebtc.com/img/hustle41.png" alt="LuckyLion" />
              </div>
              <div class="player-details">
                <div class="player-name">LuckyLion</div>
                <div class="player-level">VIP Bronze</div>
              </div>
            </div>
            <div class="table-cell wagered-cell">
              <div class="amount">1.67890123 ₿</div>
            </div>
            <div class="table-cell profit-cell">
              <div class="profit-amount positive">0.12456789 ₿</div>
            </div>
            <div class="table-cell games-cell">
              <div class="games-count">756</div>
            </div>
          </div>
          <!-- Rank 7 -->
          <div class="table-row">
            <div class="table-cell rank-cell">
              <div class="rank-badge rank-7">7</div>
            </div>
            <div class="table-cell player-cell">
              <div class="player-avatar-small">
                <img src="https://hustlebtc.com/img/hustle61.png" alt="DiamondHands" />
              </div>
              <div class="player-details">
                <div class="player-name">DiamondHands</div>
                <div class="player-level">Regular</div>
              </div>
            </div>
            <div class="table-cell wagered-cell">
              <div class="amount">1.45678901 ₿</div>
            </div>
            <div class="table-cell profit-cell">
              <div class="profit-amount positive">0.09876543 ₿</div>
            </div>
            <div class="table-cell games-cell">
              <div class="games-count">634</div>
            </div>
          </div>
          <!-- Rank 8 -->
          <div class="table-row">
            <div class="table-cell rank-cell">
              <div class="rank-badge rank-8">8</div>
            </div>
            <div class="table-cell player-cell">
              <div class="player-avatar-small">
                <img src="https://hustlebtc.com/img/hustle18.png" alt="CryptoKing" />
              </div>
              <div class="player-details">
                <div class="player-name">CryptoKing</div>
                <div class="player-level">VIP Silver</div>
              </div>
            </div>
            <div class="table-cell wagered-cell">
              <div class="amount">1.23456789 ₿</div>
            </div>
            <div class="table-cell profit-cell">
              <div class="profit-amount positive">0.08765432 ₿</div>
            </div>
            <div class="table-cell games-cell">
              <div class="games-count">512</div>
            </div>
          </div>
          <!-- Rank 9 -->
          <div class="table-row">
            <div class="table-cell rank-cell">
              <div class="rank-badge rank-9">9</div>
            </div>
            <div class="table-cell player-cell">
              <div class="player-avatar-small">
                <img src="https://hustlebtc.com/img/hustle9.png" alt="MoonShot" />
              </div>
              <div class="player-details">
                <div class="player-name">MoonShot</div>
                <div class="player-level">Regular</div>
              </div>
            </div>
            <div class="table-cell wagered-cell">
              <div class="amount">1.11111111 ₿</div>
            </div>
            <div class="table-cell profit-cell">
              <div class="profit-amount positive">0.07654321 ₿</div>
            </div>
            <div class="table-cell games-cell">
              <div class="games-count">445</div>
            </div>
          </div>
          <!-- Rank 10 -->
          <div class="table-row">
            <div class="table-cell rank-cell">
              <div class="rank-badge rank-10">10</div>
            </div>
            <div class="table-cell player-cell">
              <div class="player-avatar-small">
                <img src="https://hustlebtc.com/img/hustle8.png" alt="BitBeast" />
              </div>
              <div class="player-details">
                <div class="player-name">BitBeast</div>
                <div class="player-level">VIP Bronze</div>
              </div>
            </div>
            <div class="table-cell wagered-cell">
              <div class="amount">0.98765432 ₿</div>
            </div>
            <div class="table-cell profit-cell">
              <div class="profit-amount positive">0.06543210 ₿</div>
            </div>
            <div class="table-cell games-cell">
              <div class="games-count">378</div>
            </div>
          </div>
        </div>
        <div class="table-footer">
          <div class="update-info">
            <i class="fas fa-sync-alt"></i>
            <span>Last updated: 2 minutes ago</span>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- Footer -->
<footer class="footer">
  <div class="container">
    <div class="footer-content">
      <div class="footer-brand">
        <div class="footer-logo">
          <div class="brand-logo">
            <span class="bitcoin-symbol">₿</span>
          </div>
          <span class="brand-text">HustleBTC</span>
        </div>
        <p class="footer-description">
          The most trusted Bitcoin casino platform with provably fair games
          and instant payouts.
        </p>
      </div>
      <div class="footer-links">
        <div class="footer-column">
          <h4 class="footer-title">Games</h4>
          <a href="/slots" class="footer-link">Bitcoin Slots</a>
          <a href="/poker" class="footer-link">Crypto Poker</a>
          <a href="/dice" class="footer-link">Bitcoin Dice</a>
          <a href="/crash" class="footer-link">Crash Game</a>
        </div>
        <div class="footer-column">
          <h4 class="footer-title">Support</h4>
          <a href="/help" class="footer-link">Help Center</a>
          <a href="/contact" class="footer-link">Contact Us</a>
          <a href="{{ route('faq') }}" class="footer-link">FAQ</a>
          <a href="/live-chat" class="footer-link">Live Chat</a>
        </div>
        <div class="footer-column">
          <h4 class="footer-title">Legal</h4>
          <a href="{{ route('terms') }}" class="footer-link">Terms of Service</a>
          <a href="/privacy" class="footer-link">Privacy Policy</a>
          <a href="/responsible" class="footer-link">Responsible Gaming</a>
          <a href="/license" class="footer-link">License</a>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer-copyright">
        <p>&copy; 2024 HustleBTC. All rights reserved.</p>
      </div>
      <div class="footer-social">
        <a href="#" class="social-link">Twitter</a>
        <a href="#" class="social-link">Telegram</a>
        <a href="#" class="social-link">Discord</a>
      </div>
    </div>
  </div>
</footer>
@endsection
