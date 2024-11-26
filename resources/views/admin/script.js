function showSection(sectionId) {
    const sections = document.querySelectorAll('.content-section');
    sections.forEach(section => {
      section.classList.add('d-none');
    });
    document.getElementById(sectionId).classList.remove('d-none');
  }
  