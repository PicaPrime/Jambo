@extends('layouts.withoutNav')
@section('title', 'Game #12345 - HustleBTC | Bitcoin Casino Game Details')
@section('content')
<div class="game-container" style="padding-top: 70px;">
  <!-- Game Header -->
  <div class="game-header-card">
    <div class="game-header-content">
      <div class="game-info-left">
        <h1 class="game-title hide-on-small">Bitcoin Crash Game</h1>
        <h2 class="game-multiplier">2.47x</h2>
        <div class="game-meta">
          <div class="game-id">
            <span>🎮</span>
            Game #12345
          </div>
          <div class="game-time">3 hours ago</div>
          <div class="game-date">January 15, 2025 14:32:15 UTC</div>
        </div>
      </div>
      <div class="game-visual">
        <div class="game-icon">
          <img src="https://hustlebtc.com/img/loop1.png" alt="Game Icon" />
        </div>
      </div>
    </div>
  </div>
  <!-- Players Section -->
  <div class="players-section">
    <h2 class="section-title">Game Players</h2>
    <table class="players-table">
      <thead>
        <tr>
          <th>Player</th>
          <th>Bet</th>
          <th>Cashed Out</th>
          <th>Bonus</th>
          <th>Profit</th>
        </tr>
      </thead>
      <tbody>
        <!-- Winner Row -->
        <tr>
          <td><a href="/user/CryptoKing" class="player-name">CryptoKing</a></td>
          <td class="bet-amount">1,000 bits</td>
          <td class="cash-out-win">2.47x</td>
          <td class="bonus-amount">5.25%</td>
          <td class="profit-positive">+1,522.5 bits</td>
        </tr>
        <tr>
          <td><a href="/user/BitcoinBull" class="player-name">BitcoinBull</a></td>
          <td class="bet-amount">500 bits</td>
          <td class="cash-out-win">2.35x</td>
          <td>-</td>
          <td class="profit-positive">+675 bits</td>
        </tr>
        <tr>
          <td><a href="/user/HodlMaster" class="player-name">HodlMaster</a></td>
          <td class="bet-amount">2,500 bits</td>
          <td class="cash-out-win">1.85x</td>
          <td>-</td>
          <td class="profit-positive">+2,125 bits</td>
        </tr>
        <tr class="lose">
          <td><a href="/user/RiskyPlayer" class="player-name">RiskyPlayer</a></td>
          <td class="bet-amount">750 bits</td>
          <td class="cash-out-lose">Lose</td>
          <td>-</td>
          <td class="profit-negative">-750 bits</td>
        </tr>
        <tr class="lose">
          <td><a href="/user/GreedyGambler" class="player-name">GreedyGambler</a></td>
          <td class="bet-amount">1,200 bits</td>
          <td class="cash-out-lose">Lose</td>
          <td>-</td>
          <td class="profit-negative">-1,200 bits</td>
        </tr>
        <tr>
          <td><a href="/user/SmartBetter" class="player-name">SmartBetter</a></td>
          <td class="bet-amount">300 bits</td>
          <td class="cash-out-win">2.10x</td>
          <td>-</td>
          <td class="profit-positive">+330 bits</td>
        </tr>
        <tr class="lose">
          <td><a href="/user/AllInPlayer" class="player-name">AllInPlayer</a></td>
          <td class="bet-amount">5,000 bits</td>
          <td class="cash-out-lose">Lose</td>
          <td>-</td>
          <td class="profit-negative">-5,000 bits</td>
        </tr>
        <tr>
          <td><a href="/user/LuckyWinner" class="player-name">LuckyWinner</a></td>
          <td class="bet-amount">150 bits</td>
          <td class="cash-out-win">2.40x</td>
          <td class="bonus-amount">2.15%</td>
          <td class="profit-positive">+213.2 bits</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Provably Fair Hash -->
  <div class="hash-section">
    <h3 class="hash-title">Provably Fair Hash:</h3>
    <div class="hash-value">
      <a href="{{ route('faq') }}#fair" class="hash-link">
        a1b2c3d4e5f6789012345678901234567890abcdef1234567890abcdef123456789012345678901234567890abcdef
      </a>
    </div>
  </div>
  <!-- Action Buttons -->
  <div class="action-buttons">
    <a href="{{ route('home') }}" class="action-btn primary">
      <span>🎮</span>
      Play Another Game
    </a>
    <a href="/games" class="action-btn secondary">
      <span>📊</span>
      View All Games
    </a>
  </div>
</div>
<a href="#top" class="back-to-top" aria-label="Back to top">↑</a>
@endsection
