const elements = [
    { name: 'landing.title', content: 'The name' },
    { name: 'landing.description', content: 'Ek acchi si description' },
    { name: 'menu.1', content: 'Home' },
    { name: 'menu.2', content: 'Team' },
    { name: 'menu.3', content: 'Contact' },
]
/* parser example: 
{
  landing: {
    title: 'The name',
    description: 'Ek acchi si description'
  },
  menu: ['Home', 'Team', 'Contact']
}
*/
const parser = (elements) => {
    const parsed = {} // { landing: {}, menu: [] }
    elements.forEach((element) => {
        const { name, content } = element // name: 'landing.title', content: 'The name'
        const keys = name.split('.') // ['landing', 'title']
        const lastKey = keys.pop() // 'title'
        let current = parsed // { landing: {} }
        keys.forEach((key) => { // 'landing'
        if (!current[key]) { // current['landing'] = undefined
            current[key] = {} // current['landing'] = {}
        }
        current = current[key] // current = current['landing']
        })
        current[lastKey] = content // current['title'] = 'The name'
    })
    // parse menu
    const menu = parsed.menu // []
    const menuKeys = Object.keys(menu) // ['1', '2', '3']
    const menuValues = menuKeys.map((key) => menu[key]) // ['Home', 'Team', 'Contact']
    parsed.menu = menuValues // { menu: ['Home', 'Team', 'Contact'] }
    return parsed // { landing: { title: 'The name' }, menu: [] }
}
const parsed = parser(elements)
console.log(parsed)
