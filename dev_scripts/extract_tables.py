import json
from docx import Document

doc = Document(r'C:\Users\AIO\Downloads\مقاييس التميز الشخصي والاحتراف المهني.docx')

output = []

# Function to extract tables
def extract_tables():
    tables_data = []
    for i, table in enumerate(doc.tables):
        table_text = []
        for row in table.rows:
            row_text = [cell.text.strip().replace('\n', ' ') for cell in row.cells]
            table_text.append(" | ".join(row_text))
        
        # Check if this table looks like a questionnaire
        full_table_text = " ".join(table_text)
        if "العبارة" in full_table_text or "م" in full_table_text or "دائما" in full_table_text or "نعم" in full_table_text:
            tables_data.append(f"--- Table {i} ---\n" + "\n".join(table_text[:15]) + "\n(Truncated...)\n")
    return tables_data

with open('docx_tables.txt', 'w', encoding='utf-8') as f:
    f.write("\n".join(extract_tables()))
