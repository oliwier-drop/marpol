import './bootstrap';
import 'flowbite';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 600,
    once: true,
    offset: 40,
});

document.addEventListener('DOMContentLoaded', () => {
    const banner = document.getElementById('cookie-consent-banner');
    const settingsModal = document.getElementById('cookie-settings-modal');
    const acceptBtn = document.getElementById('cookie-consent-accept');
    const rejectBtn = document.getElementById('cookie-consent-reject');
    const settingsBtn = document.getElementById('cookie-consent-settings');
    const settingsCloseBtn = document.getElementById('cookie-settings-close');
    const settingsCancelBtn = document.getElementById('cookie-settings-cancel');
    const settingsSaveBtn = document.getElementById('cookie-settings-save');
    const analyticsToggle = document.getElementById('cookie-analytics-toggle');
    const marketingToggle = document.getElementById('cookie-marketing-toggle');
    const preferencesTrigger = document.getElementById('cookie-preferences-trigger');

    if (!banner) return;

    const CONSENT_STATUS_KEY = 'cookieConsentStatus';
    const ANALYTICS_KEY = 'cookieAnalyticsEnabled';
    const MARKETING_KEY = 'cookieMarketingEnabled';

    const syncTogglesFromStorage = () => {
        if (analyticsToggle) {
            const storedAnalytics = localStorage.getItem(ANALYTICS_KEY);
            analyticsToggle.checked = storedAnalytics === 'true';
        }

        if (marketingToggle) {
            const storedMarketing = localStorage.getItem(MARKETING_KEY);
            marketingToggle.checked = storedMarketing === 'true';
        }
    };

    syncTogglesFromStorage();

    const status = localStorage.getItem(CONSENT_STATUS_KEY);

    if (status === 'accepted' || status === 'rejected' || status === 'custom') {
        // Użytkownik już podjął decyzję – pokazujemy tylko ikonę ciasteczka
        if (preferencesTrigger) {
            preferencesTrigger.classList.remove('hidden');
        }
    } else {
        // Brak decyzji – pokazujemy baner, ukrywamy ikonę
        banner.classList.remove('hidden');
        if (preferencesTrigger) {
            preferencesTrigger.classList.add('hidden');
        }
    }

    const showPreferencesTrigger = () => {
        if (preferencesTrigger) {
            preferencesTrigger.classList.remove('hidden');
        }
    };

    const hideBanner = () => {
        banner.classList.add('hidden');
        showPreferencesTrigger();
    };

    const openSettings = () => {
        if (!settingsModal) return;
        syncTogglesFromStorage();
        settingsModal.classList.remove('hidden');
        settingsModal.classList.add('flex');
    };

    const closeSettings = () => {
        if (!settingsModal) return;
        settingsModal.classList.add('hidden');
        settingsModal.classList.remove('flex');
    };

    if (acceptBtn) {
        acceptBtn.addEventListener('click', () => {
            localStorage.setItem(CONSENT_STATUS_KEY, 'accepted');
            localStorage.setItem(ANALYTICS_KEY, 'true');
            localStorage.setItem(MARKETING_KEY, 'true');
            hideBanner();
        });
    }

    if (rejectBtn) {
        rejectBtn.addEventListener('click', () => {
            localStorage.setItem(CONSENT_STATUS_KEY, 'rejected');
            localStorage.setItem(ANALYTICS_KEY, 'false');
            localStorage.setItem(MARKETING_KEY, 'false');
            hideBanner();
        });
    }

    if (settingsBtn) {
        settingsBtn.addEventListener('click', () => {
            openSettings();
        });
    }

    if (settingsCloseBtn) {
        settingsCloseBtn.addEventListener('click', () => {
            closeSettings();
        });
    }

    if (settingsCancelBtn) {
        settingsCancelBtn.addEventListener('click', () => {
            closeSettings();
        });
    }

    if (settingsSaveBtn) {
        settingsSaveBtn.addEventListener('click', () => {
            const analyticsEnabled = analyticsToggle ? analyticsToggle.checked : false;
            const marketingEnabled = marketingToggle ? marketingToggle.checked : false;
            localStorage.setItem(CONSENT_STATUS_KEY, 'custom');
            localStorage.setItem(ANALYTICS_KEY, analyticsEnabled ? 'true' : 'false');
            localStorage.setItem(MARKETING_KEY, marketingEnabled ? 'true' : 'false');
            hideBanner();
            closeSettings();
        });
    }

    if (preferencesTrigger) {
        preferencesTrigger.addEventListener('click', () => {
            openSettings();
        });
    }
});
