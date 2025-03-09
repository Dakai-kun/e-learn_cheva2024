let notes = []

function loadData() {
    const data = localStorage.getItem("notes")
    if (data) {
        notes = JSON.parse(data)
    }
    notes =  JSON.parse()
}

function saveData() {
    localStorage.setItem("notes", JSON.stringify(notes))
}

let notesElement = document.getElementById("notes-list")
function renderNotes() {
    notesElement.innerHTML = ""
    notes.forEach((note, index) => {
        const newElement = `
            <div class="box">
                <label for="" class="judul">${note.name}</label> <br>
                <label for="" class="isi">${note.description}</label> <br>
                <label for="" class="dl">Deadline: Deadline: ${note.dl}</label> <br>
                <button class="hapus" onclick = "deleteNotes(${index})">Hapus</button>
            </div>
        `
        notesElement.innerHTML += newElement
    })
}

function addNote() {
    const newName = document.getElementById("name").value
    const newDescription = document.getElementById("description").value
    const newDeadline = document.getElementById("dl").value
    if (newName && newDescription && newDeadline && newName.length > 1 && newDescription.length > 1 && newDeadline.length > 1) 
        {      
        console.log(newName, newDescription, newDeadline)
        const newData = {
            name: newName,
            description: newDescription,
            dl: newDeadline
        }
        notes.push(newData)
        saveData()
        renderNotes()
    }
}

function deleteNotes(index) {
    notes.splice(index, 1)
    // notes.splice(index, 1, 
    //     {title: "Data Baru 1", description: "Data Baru 1"},
    //     {title: "Data Baru 2", description: "Data Baru 2"}
    // )
    saveData()
    renderNotes()
}

renderNotes()