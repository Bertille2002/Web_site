async function fetchSecurityBreach() {
    const apiURL = 'https://haveIbeenpwned.com/api/v3/breaches';
    try {
        const response = await fetch(apiURL, {
            method: 'GET',
            headers: {
                'User-Agent': 'CYBERPORTFOLIO',
                'Accept': 'application/json'
            }
        });

        if (!response.ok) {
            throw Error('API data recovery impossible');
        }

        const breaches = await response.json();

        if (breaches && breaches.length > 0) {
            const latestBreach = breaches[0];
            displaySecurityInfo(latestBreach);
        } else {
            console.log('No recent security breach found.');
        }
    } catch (error) {
        console.error('Data recovery error', error);
    }
}

function displaySecurityInfo(breach) {
    const securityInfo = document.getElementById('security-info');
    const securityDetails = document.getElementById('security-details');

    securityDetails.innerHTML = `
    The website <strong>${breach.Name}</strong> has been compromised.
    <br> Date of leak : <strong>${breach.BreachDate}</strong>
    <br>Description : ${breach.Description}
    <br><a href="${breach.WikiUrl}" target="_blank">Find out more</a>
    `;

    securityInfo.style.display = 'block';
}

fetchSecurityBreach();