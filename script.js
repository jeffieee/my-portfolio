function toggleMenu() {
  const menu = document.querySelector('.menu-links');
  const icon = document.querySelector('.hamburger-icon');
  menu.classList.toggle('open');
  icon.classList.toggle('open');
}

const experience = [
  {
    id: 1,
    company_name: 'Pixel8 Web Solutions and Consultancy Inc.',
    role: 'Backend Developer',
    role_details: [
      { title: 'SQL', exp_level: 'Intermediate' },
      { title: 'PHP', exp_level: 'Experienced' },
      { title: 'Gitlab', exp_level: 'Experienced' },
      { title: 'OOP', exp_level: 'Intermediate' },
      { title: 'PHP Unit', exp_level: 'Experienced' },
      { title: 'Restful API', exp_level: 'Experienced' },
    ],
  },
  {
    id: 2,
    company_name: 'Pixel8 Web Solutions and Consultancy Inc.',
    role: 'Backend Developer',
    role_details: [
      { title: 'SQL', exp_level: 'Intermediate' },
      { title: 'PHP', exp_level: 'Experienced' },
      { title: 'Gitlab', exp_level: 'Experienced' },
      { title: 'OOP', exp_level: 'Intermediate' },
      { title: 'PHP Unit', exp_level: 'Experienced' },
      { title: 'Restful API', exp_level: 'Experienced' },
    ],
  },
  {
    id: 3,
    company_name: 'Pixel8 Web Solutions and Consultancy Inc.',
    role: 'Backend Developer',
    role_details: [
      { title: 'SQL', exp_level: 'Intermediate' },
      { title: 'PHP', exp_level: 'Experienced' },
      { title: 'Gitlab', exp_level: 'Experienced' },
      { title: 'OOP', exp_level: 'Intermediate' },
      { title: 'PHP Unit', exp_level: 'Experienced' },
      { title: 'Restful API', exp_level: 'Experienced' },
    ],
  },
  {
    id: 4,
    company_name: 'Pixel8 Web Solutions and Consultancy Inc.',
    role: 'Backend Developer',
    role_details: [
      { title: 'SQL', exp_level: 'Intermediate' },
      { title: 'PHP', exp_level: 'Experienced' },
      { title: 'Gitlab', exp_level: 'Experienced' },
      { title: 'OOP', exp_level: 'Intermediate' },
      { title: 'PHP Unit', exp_level: 'Experienced' },
      { title: 'Restful API', exp_level: 'Experienced' },
    ],
  },
];

const projects = [
  {
    id: 1,
    image: './assets/baya.png',
    title:
      'BayaScript: Convolutional Neural Networks Driven Character Recognition In a Mobile Application for Learning BayBayin',
    githubLink:
      'https://github.com/jeffieee/My-Projects/blob/6be6e8515f639191dcf9e1639eae90423b0fb31f/README.md',
  },
  {
    id: 2,
    image: './assets/sapms.png',
    title:
      'Web-Based Student Academic Performance Monitoring System for Banay-Banay Elementary School',
    githubLink:
      'https://github.com/jeffieee/My-Projects/blob/66a6c4ee6f056c0c5780781fa12cf9b96973adf7/README.md',
  },
  {
    id: 3,
    image: './assets/sapms.png',
    title:
      'Web-Based Student Academic Performance Monitoring System for Banay-Banay Elementary School',
    githubLink:
      'https://github.com/jeffieee/My-Projects/blob/66a6c4ee6f056c0c5780781fa12cf9b96973adf7/README.md',
  },
  {
    id: 4,
    image: './assets/baya.png',
    title:
      'BayaScript: Convolutional Neural Networks Driven Character Recognition In a Mobile Application for Learning BayBayin',
    githubLink:
      'https://github.com/jeffieee/My-Projects/blob/6be6e8515f639191dcf9e1639eae90423b0fb31f/README.md',
  },
  {
    id: 5,
    image: './assets/baya.png',
    title:
      'BayaScript: Convolutional Neural Networks Driven Character Recognition In a Mobile Application for Learning BayBayin',
    githubLink:
      'https://github.com/jeffieee/My-Projects/blob/6be6e8515f639191dcf9e1639eae90423b0fb31f/README.md',
  },
];

function createExperienceCards() {
  const container = document.querySelector('.experience-details-container');

  // Clear previous content
  container.innerHTML = '';

  experience.forEach((exp) => {
    // Create a new details container for each experience
    const detailsContainer = document.createElement('div');
    detailsContainer.className = 'details-container';

    // Create and append company name
    const companyName = document.createElement('p');
    companyName.className = 'section__text__p1';
    companyName.textContent = exp.company_name;
    detailsContainer.appendChild(companyName);

    // Create and append role
    const role = document.createElement('h2');
    role.className = 'experience-sub-title';
    role.textContent = exp.role;
    detailsContainer.appendChild(role);

    // Create and append role details container
    const articleContainer = document.createElement('div');
    articleContainer.className = 'article-container';

    exp.role_details.forEach((detail) => {
      const article = document.createElement('article');

      const img = document.createElement('img');
      img.src = './assets/checkmark.png'; // Update the path to the correct image location
      img.alt = 'Experience icon';
      img.className = 'icon';

      const detailContainer = document.createElement('div');

      const title = document.createElement('h3');
      title.textContent = detail.title;

      const level = document.createElement('p');
      level.textContent = detail.exp_level;

      detailContainer.appendChild(title);
      detailContainer.appendChild(level);

      article.appendChild(img);
      article.appendChild(detailContainer);

      articleContainer.appendChild(article);
    });

    // Append role details container to the details container
    detailsContainer.appendChild(articleContainer);

    // Append the details container to the main container
    container.appendChild(detailsContainer);
  });
}

function createProjectCards() {
  const project_container = document.querySelector(
    '.main-project-details-container'
  );

  // Clear previous content
  project_container.innerHTML = '';

  projects.forEach((project) => {
    // Create a new details container for each project
    const projectDetailsContainer = document.createElement('div');
    projectDetailsContainer.className = 'project-details-container'; // Corrected class name

    // Create and append project image
    const articleContainer = document.createElement('div');
    articleContainer.className = 'project-article-container';
    const img = document.createElement('img');
    img.src = project.image;
    img.alt = project.title;
    img.className = 'project-img';
    articleContainer.appendChild(img);
    projectDetailsContainer.appendChild(articleContainer);

    // Create and append project title
    const title = document.createElement('h2');
    title.className = 'experience-sub-title project-title';
    title.textContent = project.title;
    projectDetailsContainer.appendChild(title);

    // Create and append button container
    const btnContainer = document.createElement('div');
    btnContainer.className = 'btn-container';
    const button = document.createElement('button');
    button.className = 'btn btn-color-2 project-btn';
    button.textContent = 'Github';
    button.onclick = () => {
      window.location.href = project.githubLink;
    };
    btnContainer.appendChild(button);
    projectDetailsContainer.appendChild(btnContainer);

    // Append the details container to the main container
    project_container.appendChild(projectDetailsContainer);
  });
}

// Call both functions on page load
window.onload = function () {
  createProjectCards();
  createExperienceCards();
};
