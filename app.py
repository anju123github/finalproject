
from flask import Flask, render_template, request, redirect, url_for

app = Flask(__name__)

# Dummy data for cyber world information

cyber_world_info = {
    "search1": "Cybersecurity is the practice of protecting systems, networks, and programs from digital attacks.",
    "search2": "Phishing is a type of cyber attack where attackers trick individuals into providing sensitive information.",
}

# Dummy data for cyber crime stories

cyber_crime_stories = [
    {
        "title": "Ransomware Attack on XYZ Company",
        "content": "Details about the ransomware attack..."
    },
    {
        "title": "Social Engineering Scam",
        "content": "Description of a social engineering scam..."
    },
]

# Dummy data for user complaints

user_complaints = []

# Dummy data for user queries

user_queries = []


@app.route('/')
def home():
    return render_template('index.html')

@app.route('/cyber_world_info', methods=['POST'])
def cyber_world_info_search():
    query = request.form['search_query']
    result = cyber_world_info.get(query, "No information found.")
    return render_template('cyber_world_info.html', result=result)


@app.route('/cyber_crime_stories')
def crime_stories():
    return render_template('cyber_crime_stories.html', stories=cyber_crime_stories)


@app.route('/complain', methods=['POST'])
def complain():
    complaint = request.form['complaint']
    user_complaints.append(complaint)
    return redirect(url_for('home'))


@app.route('/query', methods=['POST'])
def query():
    user_query = request.form['query']
    user_queries.append(user_query)
    return redirect(url_for('home'))

# @app.route('/cyber_world_info_search', methods=['POST'])
# def cyber_world_info_search():
#     query = request.form['search_query']
#     result = cyber_world_info.get(query, "No information found.")
#     return render_template('cyber_world_info.html', result=result)


if __name__ == '__main__':
    app.run(debug=True)
