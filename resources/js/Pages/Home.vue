<script setup>
import Layout from './Shared/Layout.vue'
</script>
<script>
 export default{
    layout: Layout
 }
</script>
<template>
    <div class="landing-container">
    <!-- Hero Section -->
    <section class="hero">
      <h1 class="title">Website Uptime Monitoring</h1>
      <p class="subtitle">
        Keep track of your websites’ status with real-time updates.
      </p>
      <div class="cta-buttons">
        <Link href="/dashboard" class="btn-primary">
          Get Started
        </Link>
        <Link href="/about" class="btn-secondary">
          Learn More
        </Link>
      </div>
      <p class="greeting">Hello, {{ $page.props.username }}!</p>
    </section>

    <!-- Features Section -->
    <section class="features">
      <div class="feature-card">
        <h3>Real-Time Checks</h3>
        <p>Instantly know when your sites are up or down.</p>
      </div>
      <div class="feature-card">
        <h3>Simple Interface</h3>
        <p>Easy-to-use dashboard for all your monitoring needs.</p>
      </div>
      <div class="feature-card">
        <h3>Notifications</h3>
        <p>Get alerts when something goes wrong.</p>
      </div>
    </section>
  </div>
</template>
<style scoped>
/* Plain CSS Fallback (if no Tailwind) */
.landing-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 3rem 1rem;
}

.hero {
  text-align: center;
  padding: 4rem 0;
}

.title {
  font-size: 2.5rem;
  font-weight: bold;
  color: #2d3748;
  margin-bottom: 1rem;
}

.subtitle {
  font-size: 1.25rem;
  color: #718096;
  margin-bottom: 2rem;
}

.cta-buttons {
  display: flex;
  justify-content: center;
  gap: 1rem;
  margin-bottom: 1.5rem;
}

.btn-primary {
  background-color: #2563eb;
  color: white;
  padding: 0.75rem 1.5rem;
  border-radius: 0.5rem;
  font-weight: 600;
  text-decoration: none;
  transition: background-color 0.3s;
}

.btn-primary:hover {
  background-color: #1d4ed8;
}

.btn-secondary {
  background-color: #e2e8f0;
  color: #2d3748;
  padding: 0.75rem 1.5rem;
  border-radius: 0.5rem;
  font-weight: 600;
  text-decoration: none;
  transition: background-color 0.3s;
}

.btn-secondary:hover {
  background-color: #cbd5e1;
}

.greeting {
  font-size: 1rem;
  color: #6b7280;
}

.features {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  margin-top: 1rem;
}

.feature-card {
  background: white;
  padding: 1.5rem;
  border-radius: 0.5rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.feature-card h3 {
  font-size: 1.25rem;
  font-weight: 600;
  color: #2d3748;
  margin-bottom: 0.5rem;
}

.feature-card p {
  color: #718096;
}
</style>
