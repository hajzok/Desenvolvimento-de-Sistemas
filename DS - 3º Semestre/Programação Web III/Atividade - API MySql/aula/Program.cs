using MySql.Data.MySqlClient;
using Newtonsoft.Json;
using System.Data;
using System.Text.Json;

var builder = WebApplication.CreateBuilder(args);

builder.Services.AddEndpointsApiExplorer();

var app = builder.Build();

app.MapGet("/professores", () =>
{
    MySqlConnection conexao = new MySqlConnection();
    conexao.ConnectionString = "server=localhost;password=aluno.etec;User Id=aluno;database=teste;";
    conexao.Open();

    MySqlCommand sql = new MySqlCommand("SELECT * FROM professores",conexao);

    DataTable dadosProfessores = new DataTable();

    dadosProfessores.Load(sql.ExecuteReader());
    conexao.Close();

    return Results.Ok(JsonDocument.Parse(JsonConvert.SerializeObject(dadosProfessores)));
})
.WithName("professores");

//OUTRO

app.MapGet("/professores_cursos", () =>
{
    MySqlConnection conexao = new MySqlConnection();
    conexao.ConnectionString = "server=localhost;password=aluno.etec;User Id=aluno;database=teste;";
    conexao.Open();

    MySqlCommand sql = new MySqlCommand("SELECT * FROM professores_cursos", conexao);

    DataTable dadosProfCurso = new DataTable();

    dadosProfCurso.Load(sql.ExecuteReader());
    conexao.Close();

    return Results.Ok(JsonDocument.Parse(JsonConvert.SerializeObject(dadosProfCurso)));
})
.WithName("professores_cursos");

app.Run();